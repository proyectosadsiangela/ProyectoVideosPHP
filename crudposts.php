<?php
	session_start();
	require_once("install.php");
		if (!empty($_REQUEST['action'])){
              	$accion = $_REQUEST['action'];

		if($accion == 'crear'){
			crearposts();
		}else if ($accion == 'ver'){
			verposts();
		}else if ($accion == 'update'){
			updateposts();
		}else if ($accion == 'delete'){
			deleteposts();
		}

	}

	function crearposts(){
		        $params = array(
 	           	    ':utc'=> date('U'),
		    	    ':anio'=> date('Y'),
					':mes' => date('m'),
					':dia' => date('d'),
					':hora' => date('H'),
                    ':minuto' => date('i'),
					':segundo' => date('s'),
					':usuario' => $_POST['usuario'],
					':titulo' => $_POST['titulo'],
					':subtitulo' => $_POST['subtitulo'],
					':icono' => $_POST['icono'],
					':texto' => $_POST['texto'],
					':imagen' => $_POST['imagen'],
					':video' => $_POST['video'],
					':sonido' => $_POST['sonido']
            	);

       // $query= "INSERT INTO Usuarios VALUES('".$nombres."', '".$apellidouno."','".$apellidodos."','".$direccion."','".$telefono."','".$estado."')";

		$query = 'INSERT INTO posts (utc,anio,mes,dia,hora,minuto,segundo,usuario,titulo,subtitulo,icono,texto,imagen,video,sonido) VALUES (:utc,:anio,:mes,:dia,:hora,:minuto,:segundo,:usuario,:titulo,:subtitulo,:icono,:texto,:imagen,:video,:sonido)';


		$result = excuteQuery("blogs","database/", $query, $params);
		if ($result > 0){
			header('Location: viewposts.php?result=true');
		}else{
			header('Location: addposts.php?result=false');
		}
	}

	function verposts (){
		$query = "SELECT * FROM configusuarios";
		$result = newQuery("blogs", "database/", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				echo "<tr>";
				echo "    <td>".$value['idposts']."</td>";
				echo "    <td>".$value['utc']."</td>";
				echo "    <td>".$value['anio']."</td>";
				echo "    <td>".$value['mes']."</td>";
				echo "    <td>".$value['dia']."</td>";
				echo "    <td>".$value['hora']."</td>";
				echo "    <td>".$value['minuto']."</td>";
				echo "    <td>".$value['segundo']."</td>";
				echo "    <td>".$value['usuario']."</td>";
				echo "    <td>".$value['titulo']."</td>";
				echo "    <td>".$value['subtitulo']."</td>";
				echo "    <td>".$value['icono']."</td>";
				echo "    <td>".$value['texto']."</td>";
				echo "    <td>".$value['imagen']."</td>";
				echo "    <<td>".$value['video']."</td>";
				echo "    <td>".$value['sonido']."</td>";
				echo "</tr>";
			}
		}else{
			echo "No se encontraron resultados";
		}
	}

	function getposts($id){
		$query = "SELECT * FROM posts WHERE idposts = '".$id."'";
		$result = newQuery("blogs", "database/", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				return $value;
			}
		}else{
			return false;
		}
	}

	function updateposts(){

		$params = array(
			':idposts'=> $_POST['idposts'],
			':utc'=> $_POST['utc'],
		    	    ':anio'=> $_POST['anio'],
					':mes' => $_POST['mes'],
					':dia' => $_POST['dia'],
					':hora' => $_POST['hora'],
                    ':minuto' => $_POST['minuto'],
					':segundo' => $_POST['segundo'],
					':usuario' => $_POST['usuario'],
					':titulo' => $_POST['titulo'],
					':subtitulo' => $_POST['subtitulo'],
					':icono' => $_POST['icono'],
					':texto' => $_POST['texto'],
					':imagen' => $_POST['imagen'],
					':video' => $_POST['video'],
					':sonido' => $_POST['sonido']
		);

		/* Preparamos el query apartir del array $params*/
		$query ='UPDATE posts SET
		            utc = :utc,
					anio = :anio,
					mes = :mes,
					dia = :dia,
					hora = :hora,
					minuto = :minuto,
					segundo = :segundo,
					usuario = :usuario,
					titulo = :titulo,
					subtitulo = :subtitulo,
					icono = :icono,
					texto = :texto,
					imagen = :imagen,
					video = :video,
					sonido = :sonido
					
					WHERE idposts = :idposts;
				';

		//Ejecutamos el query		
		$result = excuteQuery("blogs", "database/",$query, $params);
		if ($result > 0){
			unset($_SESSION['idposts']);
			$_SESSION['idposts'] = NULL;
			header('Location: viewposts.php?result=true');
		}else{
			header('Location: addposts.php?result=false');
		}
	}

	function deleteposts(){

		$idconfigusuarios = $_GET['idposts'];
		$query = "DELETE FROM posts WHERE idposts ='".$idposts."';";
		$result = excuteQuery("blogs", "database/", $query,$params);
		if ($result > 0){
			header('Location: viewposts.php?result=true');
		}else{
			header('Location: addposts.php?result=false');
		}
	}

?>