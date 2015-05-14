<?php require '../../html/backoffice/head.php'; ?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
          
         </div>
        <!-- /.col-lg-12 -->
     </div>
     <!-- /.row -->
     <div class="row container-fluid">

            <br>
           <!--  CONTENIDO PROPIO  --> 
           <div class="panel panel-default">
                <div class="panel-heading">
                     <h3 class="text-primary">Listado Usuarios</h3>
                </div>
                <div class="panel-body container-fluid">
                
                  <table id="tabla" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">					
					<thead>
						<tr>						
							<th>Email</th>					
							<th>Rol</th>
							<th>Nombre</th>
							<th>Art&iacute;culos</th>
							<th>Operacion</th>
						</tr>
					</thead>
					
					<tbody>
					    <?php foreach($usuarios as $user): ?>
					    <tr>
					    	
					        <td><?php echo $user['email']?></td>
					        <td><?php echo Constantes::$roles[$user['rol']]?></td>
					        <td>
					        	<a href="<?php echo(CONTROLLER_USER);?>?op=<?php echo(OP_DETALLE);?>&id=<?php echo $user['id']?>" >
					        		<?php echo $user['nombre']?>
					        	</a>
					        </td>
					        <td>
					        	<!--Numero de articulos del usuario-->
					        	<?php echo $user['articulos']?>
					        </td>
					        <td>
					        	<a href="<?php echo(CONTROLLER_USER);?>?id=<?php echo $user['id']?>&op=<?php echo(OP_ELIMINAR);?>" 
					        	   title="Eliminar usuario"> <i class="fa fa-trash fa-fw"></i> </a> 
					        </td>
					    </tr>
						<?php endforeach;?>
					</tbody>
					</table>
				
                </div>
                <div class="panel-footer">
                    <a href="<?php echo(CONTROLLER_USER);?>?op=<?php echo(OP_DETALLE);?>"><i class="fa fa-plus-circle fa-fw"></i>Nuevo Usuario</a>
                 </div>
            </div>
           
					
					
					
					
					
					
			<!--  End:CONTENIDO PROPIO  -->		
					

		</div><!-- /.row -->
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>
