<?php
//session_start();

$username = "";
$fullname = "";
$errors = array(); 

// conexion con la base de datos
$db = mysqli_connect('localhost', 'mwd1', 'mwdholding123', 'mwdholding');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // recibiendo las variables del formulario
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $rol = mysqli_real_escape_string($db, $_POST['rol']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($fullname)) { array_push($errors, "Nombre is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM usuarios WHERE username='$username' OR fullname='$fullname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // existe el usuario
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Se registra con exito
  if (count($errors) == 0) {
  	$password = md5($password_1);//encriptacion de la clave

  	$query = "INSERT INTO usuarios (username, fullname, password, rol) 
  			  VALUES('$username', '$fullname', '$password', '$rol')";
  	mysqli_query($db, $query);
  	$_SESSION['message'] = "User Created!";
  	header('location: usuarios.php');
  }
}
mysqli_close($db);
?>
