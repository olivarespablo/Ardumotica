<html>
<title>Ardumótica</title>
<h1 align='center'>Ardumótica</h1><h3 align='center'>Defina su aparato o sensor para los pines análogos</h3>
<body>   

				<fieldset >
					<div class="dispositivos">Pines
			<form action="/CI/index.php/portal2/guardarDispositivos/2" method="post">
					<label>Pin 0: </label> <!-- etiqueta para los input -->
					<input type="text" size="20" value="<?php echo $pin0;?>" enabled name="pin0"><br>

					<label>Pin 1: </label> <!-- etiqueta para los input -->
					<input type="text" size="20" value="<?php echo $pin1;?>" enabled name="pin1"><br>

					<label>Pin 2: </label> <!-- etiqueta para los input -->
					<input type="text" size="20" value="<?php echo $pin2;?>" enabled name="pin2"><br>

					<label>Pin 3: </label> <!-- etiqueta para los input -->
					<input type="text" size="20" value="<?php echo $pin3;?>" enabled name="pin3"><br>

					<label>Pin 4: </label> <!-- etiqueta para los input -->
					<input type="text" size="20" value="<?php echo $pin4;?>" enabled name="pin4"><br>

					<label>Pin 5: </label> <!-- etiqueta para los input -->
					<input type="text" size="20" value="<?php echo $pin5;?>" enabled name="pin5"><br>

		<br>


		<input type="submit" name="guardar" value="Guardar">
		<input type="submit" name="Volver_inicio" value="Volver al Inicio">
		</fieldset>
		</form>
		</div>
</body>
<style type="text/css">
body{		
	color: #000;		
	background-color: DimGrey;		
	margin-left: 15%;		
	margin-right: 15%;			
	border: 1px dotted #transparent;		
	padding: 10px 10px 10px 10px;
	font-family: Verdana, Geneva, sans-serif;
}
a { color:#FFF}
.dispositivos { border:solid 1px #2d2d2d;  text-align:center; background:#575757; padding:100px 50px 100px 50px;  -moz-border-radius: 5px;  -webkit-border-radius: 5px; border-radius: 5px;}


</style>
</html>

