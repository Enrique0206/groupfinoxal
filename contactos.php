<!doctype html>
<html lang="es">
<head>

<title>GROUP FINOXAL</title>

<?php include './includes/head.php';?>

</head>


<body class="clase-fade-in">
  
	<!--menu de navegacion-->
	<?php include './includes/header.php';?>
	 <!--menu de navegacion-->
	 
	  
	<!--presentacion contactos-->
	<div id="pres_cont" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
					<h2 class="text-center">Contactanos</h2>	
					<hr class="subrayado">
					<p class="text-justify">Para cualquier consulta, escribanos y nos comunicaremos lo más pronto posible.</p>			
				</div>
				<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
			</div>			
		</div>	
	</div>
		
	<div id="form_cont" class="container-fluid">
	<div  class="container">
		<form action="cod_contactos.php" method="post" role="form" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6 col-xs-12 form-line">
			  			<div class="form-group">
			  				<label for="nombre">Nombre</label>
					    	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="correo">Correo</label>
					    	<input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo" required>
					  	</div>	
					  	<div class="form-group">
					    	<label for="telefono">Numero Telefónico</label>
					    	<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Ingrese su numero" required>
			  			</div>
			  	</div>			  		
			  	<div class="col-md-6 col-xs-12">
			  		<div class="form-group">
			  			<label for ="mensaje">Déjenos su Mensaje</label>
			  			<textarea  class="form-control" name="mensaje" id="mensaje" placeholder="Ingrese el Mensaje" rows="5" required></textarea>
			  		</div>
			  		<div>			  				
			  			<input class="btn" type="submit" value="Enviar">
			  		</div>			  			
				</div>
			</div>					
		</form>
	</div>
	</div>			
	<!--presentacion contactos-->
	
	<!--mapa de contactos-->
	<div id="mapa" class="container-fluid">
		<div class="container">
			<img src="images/jpg/mapa_finoxal.jpg" class="img-responsive" alt="mapa">
		</div>
	</div>
	<!--mapa de contactos-->
		
	
	<!--pie de pagina-->
	<?php include './includes/footer.php';?>
	<!--pie de pagina-->

 
</body>
</html>