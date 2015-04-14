<?php
  // Detalle para un Articulo ?>

<?php require '../../html/backoffice/head.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header">Detalle Usuario: <?php echo $user['nombre'];?></h1>
         </div>
        <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

  
				  
				  
				  <form action="<?php echo(CONTROLLER_USER);?>" method="post">
				  
				  <div class="form-group">
				  	<input type="text"     name="nombre" required placeholder="Nombre: minimo 5 letras" pattern=".{5,}" value="<?php echo $user['nombre'];?>">
				  </div>
				  
				  <div class="form-group">	
				  	<input type="email"    name="email" required  value="<?php echo $user['email'];?>">
				  </div>	
				  	
				  <div class="form-group">	
				  	<?php Utilidades::pintarSelectOptions( 'rol', Constantes::$roles, $user['rol']); ?>
				  </div>					  	
				  	
				  <div class="form-group">	
				  	<input type="password" name="password" required placeholder="Password: minimo 5" pattern=".{5,}" value="<?php echo $user['password'];?>">
				  </div>
				  
				  	
				  	<input type="hidden" name="id" value="<?php echo $user['id'];?>">
				  	
				  	<?php if ( $user['id'] != -1 ){ ?>
					  	<input type="hidden" name="op" value="4">
					  	<input type="submit" value="modificar" class="btn btn-outline btn-primary btn-lg">
					 <?php } else { ?>
					  	<input type="hidden" name="op" value="0">
					  	<input type="submit" value="Crear" class="btn btn-outline btn-primary btn-lg">
				  	 <?php } ?>
				  	
				  </form>
				  
				  
		</div><!-- /.row -->    
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>				  