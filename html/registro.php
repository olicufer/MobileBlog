<?php 
/* 
 * 	file:html/registro.php 
 *  author: Ander Uraga
 *  email: amnsdnd
 *  version:dff
 *  date:  
 * 
 */ 

require_once '../core/config.php';


?>



<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pagina de logeo">
    <meta name="author" content="">

    <title>Resgitro| MobileApp</title>

    <!-- Bootstrap Core CSS -->
    <link href="backoffice/css/bootstrap.min.css" rel="stylesheet">

   
    <!-- Custom CSS -->
    <link href="backoffice/css/sb-admin-2.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrate como nuevo usuario</h3>
                    </div>
                    
                 
                    <?php 
                    	
                    	if ( isset($_GET['msg'])){
                    		echo('<div class="alert alert-danger">');
                    		echo $_GET['msg'];
                    		echo('</div>');
                    	}
                    	
                    ?>
                    
                    
                    <div class="panel-body">
                                        
                        <form id="form-registro" role="form" action="<?php echo CONTROLLER_REGISTRO; ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nombre Usuario" name="nombre" type="text" autofocus required pattern=".{6,}">
                                    <span id="tooltip"></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                </div>
                               
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Repite Password" name="repassword" type="password" value="" required>
                                </div>
                                
                                
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Registrate">
                                
                            </fieldset>
                        </form>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script src="public/js/jquery.min.js"></script>  
  <script>
	  $( document ).ready(function() {
	
		console.info('jQuery cargado');

		var tooltip = $('#tooltip'); //.html('hola');	
		var inputNombre = $('#form-registro input[name="nombre"]');
		
		inputNombre.focusout(function(){
			
			console.info('llamda Ajax');	

			$.ajax("ajax-registro.php", {
				   "type": "get",   // usualmente post o get
				   "success": function(result) {
				     console.info("Retorno OK");
					 tooltip.html(result);
				     
				   },
				   "error": function(result) {
				     console.error("Este callback maneja los errores", result);
				   },
				   "data": { usuario: inputNombre.val() },
				   "async": true,
				});
			
		});
		  
	 });

  </script>

</body>

</html>
