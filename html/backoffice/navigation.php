<?php 
//recuper perfil del usuario de session
if(!isset($_SESSION)){
    session_start();		
}
$perfil = $_SESSION["perfil"];
// var_dump($perfil);
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">BACKOFFICE | <?php echo $perfil['nombre']?> </a>
        <a class="navbar-brand" href="<?php echo WEBROOT; ?>"> WEB (ultimas noticias)</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="userprofile.php">
                        <i class="fa fa-user fa-fw"><?php echo $perfil['nombre']?></i>
                    </a>
                </li>                        
                <li class="divider"></li>
                <li>
                    <a href="<?php echo(CONTROLLER_LOGOUT); ?>">
                        <i class="fa fa-sign-out fa-fw"> Logout</i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
            <?php
            if ($perfil['rol'] == 0) {
            ?>
                <li>
                    <a href="<?php echo(CONTROLLER_ARTICULO);?>">
                        <i class="fa fa-archive fa-fw">Articulos</i>
                    </a>                            
                </li>
                <li>
                    <a href="<?php echo(CONTROLLER_CATEGORIA);?>">
                        <i class="fa fa-tasks fa-fw">Categorias</i>
                    </a>           
                </li>
                <li>
                    <a href="<?php echo(CONTROLLER_USER);?>">
                        <i class="fa fa-user fa-fw">Usuarios</i>
                    </a>                            
                </li>
            <?php
            }
            else {
            ?>
                <li>
                    <a href="<?php echo(CONTROLLER_ARTICULO);?>">
                        <i class="fa fa-archive fa-fw">Articulos</i>
                    </a>                            
                </li>

                <li>
                    <a href="<?php echo(CONTROLLER_PERFIL);?>">
                        <i class="fa fa-dashboard fa-fw">Perfil</i>
                    </a>
                </li>
            <?php
            }
            ?>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
 </nav>
