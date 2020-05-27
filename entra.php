<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('location: index.php');
}
$errores='';
if($_SERVER['REQUEST_METHOD']=='POST'){

	$nombre=filter_var(strtolower($_POST['nombre']));
	$apellido=$_POST['apellido'];
	$numero=$_POST['numero'];
	$direccion=$_POST['direccion'];

	try{
		$conexion=new PDO('mysql:host=localhost;dbname=lista','root','');
	}catch(PDOException $e){
			echo "Error: ".$e->getMessager();
		}

	}

}

?>