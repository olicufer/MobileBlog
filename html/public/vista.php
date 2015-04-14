<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MicroBlog | Ultimas noticias</title>

    <!-- Bootstrap -->
    <link href="html/public/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="html/public/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
   <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      
      	<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MicroBlog</a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse navbar-right">
        
        	<ul class="nav navbar-nav navbar-right">
        	
	         	<?php if ( isset($perfil)){?>
	         		<li>
	         			<a href="<?php echo(CONTROLLER_ARTICULO);?>?op=<?php echo(OP_DETALLE);?>"><i class="fa fa-plus-circle fa-fw"></i>Nuevo Articulo</a>
	         		</li>
	         		<li>
	         			<a href="<?php echo CONTROLLER_ARTICULO ?>"><span class="label label-info"> <?php echo $perfil['nombre']; ?> </span></a>				
					</li>
				<?php } else { ?>
					<li class="active" >	
					<a href="html/login.php"> Login </a>
					</li>		
				<?php } //else ?>
			
			</ul>	
        </div><!--/.nav-collapse -->
        
      </div>
    </nav>
  
	  
	<!-- Begin page content -->
    <div class="container">	  
	  
	   	<br><br><br><br>
	   		   	
	   	<?php  foreach ($articulos as $art ) { ?>
	   	
		   	<div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <h3><?php echo $art['titulo']?></h3>
			      <img src="html/public/images/foto.svg" alt="foto por defecto">
			      <div class="caption">			        
			        <h4>
			        	<span class="label label-primary"><?php echo $art['nombre']?></span>
			        	<span class="label label-default"><?php echo $art['fecha']?></span>
			        </h4>
			        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			        
			      </div>
			    </div>
			  </div>
			</div>
	   	
	   	<?php } //foereach?>
	<!-- end: Content  -->   	
	   	
	
	
	<!-- FOOTER -->
	 <footer class="footer">
      <div class="container">
        
      </div>
    </footer>
	   	
	
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="html/public/js/bootstrap.min.js"></script>
  </body>
</html>
