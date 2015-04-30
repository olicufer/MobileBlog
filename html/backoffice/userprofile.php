<?php
  // Detalle para un Articulo ?>

<?php require '../../html/backoffice/head.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header">Datos Usuario - <?php echo $perfil['nombre'];?></h1>
         </div>
        <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
				  
				  <div class="form-group">
				  	<label id="nombre">Nombre: </label> <?php echo $perfil['nombre'];?>
				  </div>
				  
				  <div class="form-group">	
				    <label id="email">Email: </label> <?php echo $perfil['email'];?>
				  </div>				  	
				  	
				  <div class="form-group">	
				  	<label id="password">Password: </label> <?php echo $perfil['password'];?>
				  </div>
				  
				  <div class="form-group">	
				  	<label id="rol">Rol: </label> <?php if($perfil['rol']==0){
				  															echo "Administrador";
				  															}else{
				  															echo "Usuario";
				  	}?>
				  </div>
				  			  
				  
		</div><!-- /.row -->    
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>	