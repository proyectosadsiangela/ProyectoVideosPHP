<?php
require_once "crudposts.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agregar - Posts</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-configusuarios"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> <a href="index-rtl.html"> Salir</a></a>
                        </li>
                    </ul>
                </li>
            </ul>

             <?php include_once "menu.php"; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar Posts
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="viewconfigusuarios.php">Posts</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Editar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php if(empty($_GET['id'])){ ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> No se encontro un posts al que aplicar esta accion.
                    </div>
                <?php }else{ ?>

                <?php
                    $_SESSION['idposts'] = $_GET['id'];
                    $arrposts = getposts($_SESSION['idposts']);
                ?>
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" id="frmposts" method="post" action="crudposts.php?action=update">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input id="usuario" name="usuario" class="form-control" value="<?php echo $arrposts['usuario']; ?>" placeholder="Usuario">
                                <p class="help-block">Usuario.</p>
                            </div>

                            <div class="form-group">
                                <label>Titulo</label>
                                <input id="titulo" name="titulo" class="form-control" value="<?php echo $arrposts['titulo']; ?>" placeholder="Titulo">
                                <p class="help-block">Titulo</p>
                            </div>

                            <div class="form-group">
                                <label>Subtitulo</label>
                                <input id="respuestas" name="respuestas" class="form-control" value="<?php echo $arrposts['subtitulo']; ?>" placeholder="Subtitulo">
                                <p class="help-block">Subtitulo.</p>
                            </div>
                             <div class="form-group">
                                <label>Icono</label>
                                <input type="file" id="icono" name="icono" class="form-control" value="<?php echo $arrposts['icono']; ?>" placeholder="icono"><input id="sonido" name="sonido" class="form-control" value="">
                                <p class="help-block">Icono.</p>
                            </div>
                             <div class="form-group">
                                <label>Texto</label>
                                <input id="texto" name="texto" class="form-control" value="<?php echo $arrposts['texto']; ?>" placeholder="Texto">
                                <p class="help-block">Texto.</p>
                            </div>
                             <div class="form-group">
                                <label>Imagen</label>
                                <input type="file" id="imagen" name="imagen" class="form-control" value="<?php echo $arrposts['imagen']; ?>" placeholder="Imagen"><input id="imagen" name="imagen" class="form-control" value="">
                                <p class="help-block">Imagen.</p>
                            </div>
                             <div class="form-group">
                                <label>Video</label>
                                <input type="file" id="video" name="video" class="form-control" value="<?php echo $arrposts['video']; ?>" placeholder="Video"><input id="video" name="video" class="form-control" value="">
                                <p class="help-block">Video.</p>
                            </div>
                             <div class="form-group">
                                <label>Sonido</label>
                                <input type="file" id="sonido" name="sonido" class="form-control" value="<?php echo $arrposts['sonido']; ?>" placeholder="Sonido"><input id="sonido" name="sonido" class="form-control" value="">
                                <p class="help-block">Sonido.</p>
                            </div>

                            <button type="submit" class="btn btn-default">Enviar</button>
                            <button type="reset" class="btn btn-default">Limpiar</button>

                        </form>

                    </div>

                </div>

                <?php } ?>


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
