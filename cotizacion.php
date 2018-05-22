<!doctype html>
<html lang="es">
<head>
<title>GROUP FINOXAL</title>

<?php include './includes/head.php';?>
<script src="js/cotizar.js"></script>

</head>
<body class="clase-fade-in">	
	<?php include './includes/header.php';?>
	
	<div id="tit_nos" class="container">
		
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-group">				
				<label for="items">Item</label>
				<input type="number" class="form-control" id="items" placeholder="">
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-group"></div>
		</div>
		
		<div class="form-group">				
			<label for="filas">Descripcion</label>
			<input type="text" class="form-control" id="a" placeholder="Ingrese la descripcion" Onclick="viewHide('tabla1')">
		</div>
		
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-group">			
				<label for="columnas">Cantidad</label>
				<input type="number" class="form-control" id="b" placeholder="">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
				<label for="columnas">Precio Unitario</label>
				<input type="number" class="form-control" id="c" placeholder="">
			</div>
			<!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
				<label for="columnas">Total</label>
				<input type="number" class="form-control" id="d">	
			</div>			-->
		</div>
		
		<button type="submit" class="btn btn-warning" value="Genera una tabla" onclick="genera_tabla(items.value, a.value, b.value, c.value)">Registrar</button>
			
			
		<section id="ultimo" class="container table-responsive">
			<table id="tabla1" style="display:none" class="table">
				<thead>
					<tr>
						<th>Item</th>
						<th>Descripción</th>
						<th>Cantidad</th>
						<th>Precio Unitario S/.</th>
						<th>Total S/.</th>
						<th>Opciones</th>
					</tr>
				</thead>

				<tbody id="tbodyxd">
				</tbody>

				<tfoot>
					<tr>
						<td>Monto Total</td>
						<td></td>
						<td></td>
						<td></td>
						<td><span id="total" disabled value="0" >0</span></td>
					</tr>
				</tfoot>				
			</table>		
		</section>		
	</div>
	
	
	
	<?php include './includes/footer.php';?>
	
</body>
</html>
