<?php
session_start();
	require_once("install.php");
		if (!empty($_REQUEST['action'])){
              	$accion = $_REQUEST['action'];

		if($accion == 'login'){
			validarlogin();
}
}
function validarlogin(){
 $params = array(
			':usuario'=> $_POST['usuario'],
			':contrasena'=> $_POST['contrasena'],
				
            );


//$usuarioenviado = $_POST['usuario'];
//$contrasenaenviada = $_POST['contrasena'];
     
$query = "SELECT * FROM  Usuarios WHERE  Usuario='".$usuario."' AND Contrasena='".$contrasena."'" ;

$result = excuteQuery("blogs","database/", $query, $params);
		if ($result > 0){

			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: index-rtl.html?result=false');
		}
}

?>