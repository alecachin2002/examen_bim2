<?php session_start();

if (isset($_SESSION['contacto'])) {
	header('location: index.php');
}
$errores='';
if($_SERVER['REQUEST_METHOD']=='POST'){

	$nombre=filter_var(strtolower($_POST['nombre']));
	$apellido=$_POST['apellido'];
	$numero=$_POST['numero'];
	$direccion$_POST['direccion'];

	$errores='';

	if (empty($nombre) or empty(numero))
	 {
		$error.='<li>Llena estos datos para poder guardar el contacto</li>'
	}
	else{
		try{
			$conexion=new PDO('myspl:host=localhost;dbname=contactos','root','');
		} catch(PDOException $e){
			echo "Error: ".$e->getMessager();
		}
		$statement=$conexcion->prepare('SELECT * FROM lista WHERE contacto = :nombre LIMIT 1');
		$statement-> execute(array(':contacto' => $nombre));
		$resultado=$statement-> fetch();

		if($resultado != false) {
			$error .='<li>El contacto ya existe por favor cambiar el nombre</li>';
		}
		require 'examen/contactos.html';

	}

?>