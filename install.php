<?php
	function createDB ($nameDB = "blogs", $pathDB = "database/"){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    echo "<i class='fa fa-check-square-o'></i> Se ha creado/seleccionado la base de datos correctamente."."<br/>";

	    /* Creacion de la tabla Usuarios */
		    $query = "CREATE TABLE Usuarios (
						idUsuario	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						Usuario char(10),
						Contrasena char(10),
						Nombres	char(40) NOT NULL,
						Apellidouno	char(40) NOT NULL,
	     				Apellidodos	char(40) NOT NULL,
						Direccion	char(40) NOT NULL,
						Telefono	char(40) NOT NULL,
						Estado	char(10) NOT NULL DEFAULT 'Activo'
					);"; //Creacion del query para crear la tabla.
		    $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
		    echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Usuarios."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Usuarios."."<br/>";
           //creacion de la tabla confiusuarios
		    $query = "CREATE TABLE configusuarios(
		    	    idconfigusuarios INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
					usuario char(40) Not Null,
					piel char(40),
					respuestas char(40)
				)";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Configuracion Usuarios."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Configuracion Usuarios."."<br/>";
               //creacion de la tabla post
            $query = "CREATE TABLE posts(
            idposts	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
            utc int Not Null,
            anio int,
            mes int,
            dia int,
            hora int,
            minuto int,
            segundo int,
            usuario char(80),
            titulo char(120),
            subtitulo char(200),
            icono char(80),
            texto char(4000),
            imagen char(200),
            video char(200),
            sonido char(200)
              )";
        $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla post."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla post."."<br/>";

         $query = "CREATE TABLE logs(
           idlogs INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
           utc int Not Null,
           anio int,
           mes int,
           dia int,
           hora int,
           minuto int,
           segundo int,
           ip char(80),    
           navegador char(300),
           usuario char(80),
           operacion char(80)
          )";
            $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla logs."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla logs."."<br/>";

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

	function excuteQuery ($nameDB = "blogs", $pathDB = "database/", $query){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    
		    /* Intentamos Ejecutar el Query */
		    $result = $db->exec($query);

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

	function newQuery ($nameDB = "blogs", $pathDB = "database/", $query){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/

		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    
		    /* Intentamos Ejecutar el Query */
		    $result = $db->query($query);

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

?>