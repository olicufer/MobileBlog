<?php
  // Detalle para un Articulo ?>

<?php require '../../html/backoffice/head.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header">
           		Articulo ( Crear / Editar)           		
           	</h1>
         </div>
        <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

  
				  
				  
				  <form action="<?php echo(CONTROLLER_ARTICULO);?>" method="post" enctype="multipart/form-data">
				  
					 <div class="form-group">				  
				  		<input type="text" name="titulo" required placeholder="Titulo minimo 5 letras" pattern=".{5,}" value="<?php echo $articulo['titulo'];?>">
				  	</div>
				  	
				  	<?php if ( isset($usuarios)) { 
						echo ' <div class="form-group">	';	
				  		$html = '<select name="id_usuario">';		
						foreach ( $usuarios as $user ) {								 			
							$html .='<option selected value="'.$user['id'].'">';								
							$html .= $user['nombre'];
							$html .='</option>';
						}
						$html .='</select>';
						echo $html;
						echo ' </div>';
				  		
				  	} //if ?> 
				  	 
				  	 
				  	
				  	<?php if (!empty($articulo['url_foto'])){ ?>
				  		<img src="<?php echo WEBROOT.$articulo['url_foto']?>" />
				  	<?php } else { ?>
				  		<input type="file" name="foto" id="foto" />	
				  	<?php }?> 
				  	 
				  	<textarea rows="8" cols="40" name="contenido"><?php echo $articulo['contenido'];?> </textarea> 
				  	 
				  	 				  	
				  	<input type="hidden" name="id" value="<?php echo $articulo['id'];?>">
				  	
				  	
				  	<?php if ( $articulo['id'] != -1 ){ ?>
					  	 <div class="form-group">
						  	<input type="hidden" name="op" value="4">
						  	<input type="submit" value="modificar" class="btn btn-outline btn-primary btn-lg">
						  </div>	
					 <?php } else { ?>
						  <div class="form-group">
						  	<input type="hidden" name="op" value="0">
						  	<input type="submit" value="Crear" class="btn btn-outline btn-success btn-lg">
						  </div>	
				  	 <?php } ?>
				  	
				  	
				  	
				  	
				  </form>
				  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script type="text/javascript" src="http://tweet-it.s3.amazonaws.com/tweet-it.js"></script>
<a href="javascript://" class="tweet-it">Publicar en Twitter</a>
<script type="text/javascript">
$(document).ready(function(){
$(".tweet-it").tweetIt();
})
</script>
				  
		</div><!-- /.row -->    
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>				  