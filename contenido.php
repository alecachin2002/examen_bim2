<?php session_start();

if (isset($_SESSION['contacto'])) {
	require 'examen/contacto.html';
} else {
	header('Location: contactos.php');
}

?>