<?php require '../../html/backoffice/head.php'; ?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

            
            <br>
            <!-- CONTENIDO PROPIO -->
             <div class="panel panel-default">
                <div class="panel-heading">
                	 <h3 class="text-primary">Listado categorias</h3>
                </div>
             	<div class="panel-body">
                
                  <table id="tabla">					
					<thead>
						<tr>
							<th>Id</th>
							<th>Fecha</th>
							<th>Titulo</th>
							<th>Articulos</th>
							<th>Operacion</th>
						</tr>
					</thead>
					
					<tbody>
					    <?php 
						//var_dump($categorias);
						
						foreach($categorias as $categoria): ?>
					    <tr>
					    	<td><?php echo $categoria['id']?></td>
					        <td><?php echo $categoria['fecha']?></td>
					        <td>
					        	<a href="<?php echo(CONTROLLER_CATEGORIA);?>?op=<?php echo(OP_DETALLE);?>&id=<?php echo $categoria['id']?>" >
					        		<?php echo $categoria['titulo']?>
					        	</a>
					        </td>
					         <td></td>
					        <td>
					        	<a href="<?php echo(CONTROLLER_CATEGORIA);?>?id=<?php echo $categoria['id']?>&op=<?php echo(OP_ELIMINAR);?>"  
					        	   title="Eliminar categoria"><i class="fa fa-trash fa-fw"></i></a> 
					        </td>
					    </tr>
					<?php endforeach;?>
					</tbody>
					</table>
				
				</div>
                <div class="panel-footer">
					<a href="<?php echo(CONTROLLER_CATEGORIA);?>?op=<?php echo(OP_DETALLE);?>"><i class="fa fa-plus-circle fa-fw"></i>Crea tu categoria</a>
				</div>
			</div>
			<!-- END CONTENIDO PROPIO -->
					
					
		</div><!-- /.row -->
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>

