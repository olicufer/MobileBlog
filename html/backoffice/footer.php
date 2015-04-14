<?php ?>

</div>
<!-- /#wrapper -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
    
	<!-- DataTable Plugin -->
	<script src="js/datatables/js/jquery.dataTables.min.js"></script>
    
   
    <script>
    $(document).ready(function() {
    	console.info('ready');
    	$('#tabla').DataTable({
    		"language": {
    			"sProcessing":     "Procesando...",
    		    "sLengthMenu":     "Mostrar _MENU_ registros",
    		    "sZeroRecords":    "No se encontraron resultados",
    		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    		    "sInfoPostFix":    "",
    		    "sSearch":         "Buscar:",
    		    "sUrl":            "",
    		    "sInfoThousands":  ",",
    		    "sLoadingRecords": "Cargando...",
    		    "oPaginate": {
    		        "sFirst":    "Primero",
    		        "sLast":     "Último",
    		        "sNext":     "Siguiente",
    		        "sPrevious": "Anterior"
    		    },
    		    "oAria": {
    		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    		    }
    		}
        });
	});
	</script>

</body>
</html>