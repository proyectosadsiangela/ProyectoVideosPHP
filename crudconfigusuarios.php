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

	function crearUsuario($query){
		$usuario =$_POST['usuario'];
		$piel= $_POST['contraseña'];
		$respuestas = $_POST['Nombres'];
		

       // $query= "INSERT INTO Usuarios VALUES('".$nombres."', '".$apellidouno."','".$apellidodos."','".$direccion."','".$telefono."','".$estado."')";

		$query = "INSERT INTO Usuarios (Usuario,Contrasena,Nombres, Apellidouno,Apellidodos, Direccion, Telefono, Estado) VALUES ('".$usuario."','".$contrasena."',".$nombres."', '".$apellidouno."','".$apellidodos."','".$direccion."','".$telefono."','".$estado."')";

		$result = excuteQuery("blogs", "database/", $query);
		if ($result > 0){
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: addUser.php?result=false');
		}
	}

	function verUsuarios (){
		$query = "SELECT * FROM Usuarios";
		$result = newQuery("blogs", "database/", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				echo "<tr>";
				echo "    <td>".$value['idUsuario']."</td>";
				echo "    <td>".$value['Nombres']."</td>";
				echo "    <td>".$value['Apellidouno']."</td>";
				echo "    <td>".$value['Apellidodos']."</td>";
				echo "    <td>".$value['Direccion']."</td>";
				echo "    <td>".$value['Telefono']."</td>";
				echo "    <td>".$value['Estado']."</td>";
				echo "</tr>";
			}
		}else{
			echo "No se encontraron resultados";
		}
	}

	function getUser($id){
		$query = "SELECT * FROM Usuarios WHERE idUsuario = '".$id."'";
		$result = newQuery("blogs", "database/", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				return $value;
			}
		}else{
			return false;
		}
	}

	function updateUser (){

		$idUser = $_SESSION['idUser'];
		$nombres = $_POST['Nombres'];
	    $apellidouno = $_POST['Apellidouno'];
		$apellidodos = $_POST['Apellidodos'];
		$direccion = $_POST['Direccion'];
		$telefono = $_POST['Telefono'];
		$estado = $_POST['Estado'];

		$query = "UPDATE Usuarios SET Nombres = '".$nombres."', Apellidos = '".$apellidouno."','".$apellidodos."', Direccion = '".$direccion."', Telefono = '".$telefono."', Estado = '".$estado."'  WHERE idUsuario = '".$idUser."';";

		$result = excuteQuery("blogs", "database/", $query);
		if ($result > 0){
			unset($_SESSION['idUser']);
			$_SESSION['idUser'] = NULL;
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: addUser.php?result=false');
		}
	}

	function deleteUser (){

		$idUser = $_GET['id'];
		$query = "DELETE FROM Usuarios WHERE idUsuario ='".$idUser."';";
		$result = excuteQuery("blogs", "database/", $query);
		if ($result > 0){
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: addUser.php?result=false');
		}
	}

?>