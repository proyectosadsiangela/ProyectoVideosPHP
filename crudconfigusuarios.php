<?php
	session_start();
	require_once("install.php");
		if (!empty($_REQUEST['action'])){
              	$accion = $_REQUEST['action'];

		if($accion == 'crear'){
			crearconfigusuarios();
		}else if ($accion == 'ver'){
			verconfigusuarios();
		}else if ($accion == 'update'){
			updateconfigusuarios();
		}else if ($accion == 'delete'){
			deleteconfigusuarios();
		}

	}

	function crearconfigusuarios(){
		        $params = array(
		    	    ':usuario'=> $_POST['usuario'],
					':piel' => $_POST['piel'],
					':respuestas' => $_POST['respuestas']
			);

       // $query= "INSERT INTO Usuarios VALUES('".$nombres."', '".$apellidouno."','".$apellidodos."','".$direccion."','".$telefono."','".$estado."')";

		$query = 'INSERT INTO configusuarios (usuario,piel,respuestas) VALUES (:usuario,:piel,:respuestas)';


		$result = excuteQuery("blogs","database/", $query, $params);
		if ($result > 0){
			header('Location: crudconfigusuarios.php?result=true');
		}else{
			header('Location: addconfigusuarios.php?result=false');
		}
	}

	function verconfigusuarios (){
		$query = "SELECT * FROM configusuarios";
		$result = newQuery("blogs", "database/", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				echo "<tr>";
				echo "    <td>".$value['idconfigusuarios']."</td>";
				echo "    <td>".$value['usuario']."</td>";
				echo "    <td>".$value['piel']."</td>";
				echo "    <td>".$value['respuestas']."</td>";
				echo "</tr>";
			}
		}else{
			echo "No se encontraron resultados";
		}
	}

	function getconfigusuarios($id){
		$query = "SELECT * FROM configusuarios WHERE idconfigusuarios = '".$id."'";
		$result = newQuery("blogs", "database/", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				return $value;
			}
		}else{
			return false;
		}
	}

	function updateconfigusuarios(){

		$params = array(
			':idconfigusuarios' => $_SESSION['idconfigusuarios'],
			':usuario' => $_POST['usuario'],
			':piel' => $_POST['piel'],
			':respuestas' => $_POST['respuestas'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='UPDATE configusuarios SET
					usuario = :usuario,
					piel = :piel,
					respuestas = :respuestas
					WHERE idconfigusuarios = :idconfigusuarios;
				';

		//Ejecutamos el query		
		$result = excuteQuery("blogs", "database/",$query, $params);
		if ($result > 0){
			unset($_SESSION['idconfigusuarios']);
			$_SESSION['idconfigusuarios'] = NULL;
			header('Location: viewconfigusuarios.php?result=true');
		}else{
			header('Location: addconfigusuarios.php?result=false');
		}
	}

	function deleteconfigusuarios(){

		$idconfigusuarios = $_GET['id'];
		$query = "DELETE FROM configusuarios WHERE idconfigusuarios ='".$idconfigusuarios."';";
		$result = excuteQuery("blogs", "database/", $query,$params);
		if ($result > 0){
			header('Location: viewconfigusuarios.php?result=true');
		}else{
			header('Location: addconfigusuarios.php?result=false');
		}
	}

?>