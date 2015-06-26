<?php
session_start();
include("install.php");
	/*require_once("install.php");
		if (!empty($_REQUEST['action'])){
              	$accion = $_REQUEST['action'];

		if($accion == 'login'){
			validarlogin();
}
}
function validarlogin(){
 /*$params = array(
			':usuarioenviado'=> $_POST['usuario'],
			':contrasenaenviada'=> $_POST['contrasena'],
				
            );*/


$usuarioenviado = $_POST['usuario'];
$contrasenaenviada = $_POST['contrasena'];
     
$query = "SELECT * FROM  Usuarios WHERE  Usuario='".$usuarioenviado."' AND Contrasena='".$contrasenaenviada."'" ;

$result = newQuery("blogs","database/", $query);
		if ($result != false || $result > 0){
            	foreach ($result as $value) {
			header('Location: viewUsers.php?result=true');
		}
		}else{
			header('Location: indexLogin.html?result=false');
		}

	
?>