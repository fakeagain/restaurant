<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Restaurante</title>
<link href="css/main.css" rel="stylesheet">
<link href="css/sweetalert.css" type="text/css" rel="stylesheet">
<script src="js/sweetalert.min.js"></script>
<script src="js/jquery-1.12.4.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<header>
			<img src="images/logo.gif" class="logo">
			<nav>
				<ul>
					<li><a href="#" title="Home">HOME</a></li>

					<li><a href="#" title="Carta"> CARTA</a></li>

					<li><a href="#" title="Promociones" id="lnk_promociones">PROMOCIONES
					</a></li>

					<li><a href="#" title="Contacto">CONTACTENOS </a></li>

				</ul>
		
		</header>

		<section id="main">
		<?php
		$platos = array (
				"carne.jpg",
				"ensaladas.jpg",
				"pasta.jpg",
				"pechuga.jpg",
				"pizza.jpg",
				"tarta.jpg" 
		);
		
		$precio = array (
				"$150 ",
				"$120",
				"$115",
				"$132",
				"$117",
				"$70" 
		);
		
		$diaActual = date ( 'w' );
		
		echo " <h1 style:'text-align:center; 
color:#e20018'> MENÚ DEL DIA </h1>";
		
		?>
		
		<img src="images/<?php echo $platos[$diaActual] ?>"
				class="imagenPlato" alt="foto del plato">

			<h2> <?php echo $precio[$diaActual] ?> </h2>
			<br>
			<div id="servicios"></div>
			<script>
			
		$(document).ready(function(){
			$.getJSON("servicios.json", function(datos){
				for (var i in datos.prestaciones){
					var tiposServicios=datos.prestaciones[i].descripcion;
					$("#servicios").append(" / "+tiposServicios+" / ");
					}
					});
		});		
				
		</script>
		</section>
		<footer>
			<p>
				&copy; 2016 <span id="destacado">Todos los derechos reservados</span>
			</p>

		</footer>
	</div>

	<script>
 function mostrarPromocion(){

	 sweetAlert ('¡ Promocion !', 'Abonando en efectivo 10% de Descuento.');

}

 lnk_promociones.addEventListener('click', mostrarPromocion);

	 </script>
</body>
</html>
