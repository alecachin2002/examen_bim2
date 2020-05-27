<?php 

 class conexion extends mysqli
 {
 	public function __construct()
 	{
 		parent::__construct('localhost','root','','contactos');
 		$this->query("SET NAMES 'utf-8' ;" );
 		$this->connect_errno ? die('Error de conexcion') : $error="Conectado con exito";
 		unset($error);

 	}
 }

?>
