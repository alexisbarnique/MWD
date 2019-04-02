<?php

$db = mysqli_connect('localhost', 'mwd1', 'mwdholding123', 'mwdholding');

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM usuarios WHERE id=$id");
	$_SESSION['message'] = "User deleted!"; 
	header('location: usuarios.php');
}
mysqli_close($db);
?>
