<?php
// Detalle para un Articulo 

require '../../html/backoffice/head.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Datos Usuario - <?php echo $perfil['nombre'];?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form action="userprofile.php" method="post">
        <table class="row">
            <tr class="form-group">
                <td colspan="2" class="thumb">
                    <img src="../../html/public/images/No_avatar.png" width="120" height="120" alt="Cambiar Avatar">
                    <!--img src="../../html/public/images/avatar_0.jpg" width="120" height="120" alt="Cambiar Avatar"-->
                </td>
            </tr>
            <tr class="form-group">
                <td id="nombre">Nombre:</td>
                <td><input type="text" name="nombre" value="<?php echo $perfil['nombre'];?>"></td>
            </tr>

            <tr class="form-group">	
                <td id="email">Email: </td>
                <td><input type="text" name="email" value="<?php echo $perfil['email'];?>"></td>
            </tr>				  	

            <tr class="form-group">	
                <td id="password">Contrase&ntilde;a: </td>
                <td><input type="text" name="passw" value="<?php echo $perfil['password'];?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="onsend"><input type="submit" value="Aplicar Cambios"></td>
            </tr>
        </table><!-- /.row -->
    </form>

</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>