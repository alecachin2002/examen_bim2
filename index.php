<?php session_start();
if(isset($_SESSION['contacto'])) {
	header('Location: contacto.html');
}
else{
	header('Location: nuevo.php');
}

?>
