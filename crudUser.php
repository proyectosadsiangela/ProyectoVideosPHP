<?php
	session_start();
	require_once("install.php");
		if (!empty($_REQUEST['action'])){
              	$accion = $_REQUEST['action'];

		if($accion == 'crear'){
			crearUsuario();
		}else if ($accion == 'ver'){
			verUsuarios();
		}else if ($accion == 'update'){
			updateUser();
		}else if ($accion == 'delete'){
			deleteUser();
		}

	}

	function crearUsuario($query){
		/* Proteccion de Datos */
				$params = array(
			':usuario'=> $_POST['usuario'],
			':contrasena'=> $_POST['contrasena'],
			':nombres' => $_POST['nombres'],
			':apellidouno' => $_POST['apellidouno'],
			':apellidodos' => $_POST['apellidodos'],
			':direccion' => $_POST['direccion'],
			':telefono' => $_POST['telefono'],
			':estado' => $_POST['estado'],
		
            );

		
		/* Preparamos el query apartir del array $params*/
		$query = 'INSERT INTO Usuarios 
					(Nombres, Apellidos, Direccion, Telefono, Estado) 
				VALUES 
					(:nombres,:apellidos,:direccion,:telefono,:estado)';

		/* Ejecutamos el query con los parametros */
		$result = excuteQuery("Usuarios","", $query, $params);
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
        
		/* Proteccion de Datos */
		$params = array(
			':idUser' => $_SESSION['idUser'],
			':Nombres' => $_POST['nombres'],
			':Apellidouno' => $_POST['apellidouno'],
			':Apellidodos' => $_POST['apellidodos'],
			':Direccion' => $_POST['direccion'],
			':Telefono' => $_POST['telefono'],
			':Estado' => $_POST['estado'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='UPDATE Usuarios SET
					Nombres = :nombres,
					Apellidouno = :apellidouno,
					Apellidodos = :apellidodos,
					Direccion = :direccion,
					Telefono = :telefono,
					Estado = :estado  
				 WHERE idUsuario = :idUser;
				';

		//Ejecutamos el query		
		$result = excuteQuery("blogs", "database/",,$query $params);
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

		/* Proteccion de Datos */
		$params = array(
			':id' => $_GET['id'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='DELETE FROM Usuarios
				 WHERE idUsuario = :id;';

		$result = excuteQuery("Usuarios", "", $query, $params);
		if ($result > 0){
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: viewUser.php?result=false');
		}
	}

?>