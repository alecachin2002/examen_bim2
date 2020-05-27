<?php session_start();

if(isset($_$SESSION['ingreso']))
{
	header('location: index.php');

}
$error='';
if ($SERVER['REQUEST_METHOD'] == 'POST') {
	$nom=filter_var(strtolower($_POST['nombre']));
	$apel=$_POST['apellido'];
	$num=$_POST['numero'];
	$direc=$_POST['direccion'];

		try{
			$conexcion=new PDO('myspl:host=localhost;dbname=contactos','root','');
		} catch(PDOException $e){
			echo "Error: ".$e->getMessager();
		}
		$statement=$conexcion->prepare('SELECT * FROM contactos WHERE nombre = :nom , apel= :apellido , num= :numero AND direc= :direccion');
		$resultado=$statement-> fetch();

		if($resultado != false) {
			$_SESSION['nombre']=$nom;
			header('location: index.php');
		}
		else{
			$error.='<li>Datos incorrectos</li>';
		}

	// }
}

require 'examen/entrada.html';

?>