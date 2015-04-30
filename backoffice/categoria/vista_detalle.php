<?php
  // Detalle para un Articulo ?>
  
  <?php require '../../html/backoffice/head.php'; ?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header">Categoria (Crear / Editar)</h1>
         </div>
        <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
            <div class="row">
  
  <h1> Detalle categoria: <?php echo $articulo['nombre'];?></h1>
  
  <form action="<?php echo(CONTROLLER_ARTICULO);?>" method="post">
  	<input type="text" name="nombre" required placeholder="Titulo minimo 5 letras" pattern=".{5,}" value="<?php echo $articulo['nombre'];?>">
  	
  	<input type="hidden" name="id" value="<?php echo $articulo['id'];?>">
  	
  	<?php if($articulo['id'] != -1){?>
  	
  	<input type="hidden" name="op" value="<?php echo(OP_MODIFICAR)?>">
  	<input type="submit" value="Modificar categoria">
  	
  	<?php }else{?>
  	
  	<input type="hidden" name="op" value="<?php echo(OP_INSERTAR)?>">
	<input type="submit" value="Crear categoria">
	
	<?php }?>
  </form>
  
  </div><!-- /.row -->
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>