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
           <!--  CONTENIDO PROPIO  --> 
           <div class="panel panel-default">
                <div class="panel-heading">
                     <h3 class="text-primary">Listado Categorias</h3>
                </div>
                <div class="panel-body">
                
                  <table id="tabla">					
					<thead>
						<tr>						
							<th>ID</th>					
							<th>Nombre</th>
							
						</tr>
					</thead>
					
					<tbody>
					    <?php foreach($categorias as $cat): ?>
					    <tr>					    	
					        <td>1</td>
					        <td>nombre</td>					        
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
