<?php
// LOGIN USER
session_start();
/*$db = mysqli_connect('localhost', 'root', 'root', 'mwd');*/
$db = mysqli_connect('localhost', 'mwd1', 'mwdholding123', 'mwdholding');

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($results);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      // header('location: index.php');
      /**/
      if($row['rol'] == "admin") {
        $_SESSION['admin'] = "Admin";
        header('location: cms/usuarios.php');
      }
      else {
        header('location: index.php');
      }
      /**/
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
mysqli_close($db);

?>
