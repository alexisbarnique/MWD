<?php

$username = "";
$fullname = "";
$errors = array(); 

// conexion con la base de datos
$db = mysqli_connect('localhost', 'mwd1', 'mwdholding123', 'mwdholding');

// MODIFY USER
if (isset($_POST['edit_user'])) {
  // recibiendo las variables del formulario
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $rol = mysqli_real_escape_string($db, $_POST['rol']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($fullname)) { array_push($errors, "Nombre is required"); }

  // Se actualiza con exito
  if (count($errors) == 0) {
  
  	$query = "UPDATE usuarios SET username = '$username', fullname = '$fullname', rol = '$rol' WHERE id = '$id'";
  	mysqli_query($db, $query);
    $_SESSION['message'] = "User updated"; 
    header('location: /cms/usuarios.php');
  }
}
mysqli_close($db);
?>
