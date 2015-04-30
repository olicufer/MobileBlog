<?php require '../../html/backoffice/head.php'; ?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           
         </div>
        <!-- /.col-lg-12 -->
     </div>
     <!-- /.row -->
     <div class="row">
            
     <!--  CONTENIDO PROPIO  --> 
     <br>
     
   	 <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="text-primary">Listado Categorias</h3>
        </div>        
        <!-- /.col-lg-12 -->
            <!-- /.row -->
            <div class="panel-body">

					<table id="tabla">
					<thead>
						<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Operacion</th>
						</tr>
					</thead>
					
					    <?php foreach($articulos as $articulo): ?>
					    <tr>
					    	<td><?php echo $articulo['id']?></td>					        
					        <td>
					        	<a href="<?php echo(CONTROLLER_CATEGORIA);?>?op=<?php echo(OP_DETALLE)?>&id=<?php echo $articulo['id']?>" >
					        		<?php echo $articulo['nombre']?>
					        	</a>
					        </td>
					        <td>
					        	<a href="<?php echo(CONTROLLER_CATEGORIA);?>?id=<?php echo $articulo['id']?>&op=<?php echo(OP_ELIMINAR)?>" 
					        	   title="Eliminar categoria"><i class="fa fa-trash fa-fw"></i></a> 
					        </td>			        
					    </tr>
					<?php endforeach;?>
					</table>
					
					</div>
					
					<div class="panel-footer">
                    	<a href="<?php echo(CONTROLLER_CATEGORIA);?>?op=<?php echo(OP_DETALLE)?>"><i class="fa fa-plus-circle fa-fw"></i>Crea tu categoria</a>
                	 </div>
                </div>
					
				<!--  End:CONTENIDO PROPIO  -->	
					

     </div><!-- /.row -->   
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>
