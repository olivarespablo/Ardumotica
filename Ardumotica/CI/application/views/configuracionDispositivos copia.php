<html>
<title>Ardumótica</title>
<h1 align='center'>Ardumótica</h1><h3 align='center'>Configuración del modo del pin (I/O)</h3>
<body>   
<div class="contenido">
			<!-- incrustar una imagen -->
		<?php 
			echo "<img src='/CI/public/img/LogoUv.png' border='0' width='200px'>";
		?> 

		<?php
			echo "<img src='/CI/public/img/logo-dae.png' border='0' width ='300px' align = 'right' style='margin-top:30px'> ";
		?>
		</div>
		<hr><hr>
	<div class="header">Ficha Clínica</div>
		<div class="contenido">
			<form action="/CI/index.php/portal/actualizar/<?php echo $rut;?>" method="post">
				<fieldset >
					<label>Nombre: </label> <!-- etiqueta para los input -->
					<input type="text" size="45" value="<?php echo $nombre;?>" enabled name="nombre"><br>
					<label>Rut: </label> <!-- etiqueta para los input -->
					<input type="text" size="45" value="<?php echo $rut;?>" disabled name="rut"><br>
					<label>Dirección: </label> <!-- etiqueta para los input -->
					<input type="text" size="45"  value="<?php echo $direccion?>" enabled name="direccion"><br><!-- input para textos -->
					<label>Teléfono de contacto: </label>
					<input type="tel" size="45" value="<?php echo $telefono?>" enabled name="telefono"><br>
					<label>Nombre del padre o la madre : </label>
					<input type="text" size="45" value="<?php echo $nombreFamiliar?>" enabled name="nombreFamiliar"><br>
					<label>Carrera: </label> <!-- etiqueta para los input -->
					<input type="text" size="45" value="<?php echo $carrera?>" enabled name="carrera"><br>
					<label>Año de ingreso: </label>
					<input type="text" size="45" value="<?php echo $añoIngreso?>" enabled name="añoIngreso"><br>
		</div>
		<hr><hr>
			<label>Especialidad: </label>
				<input type="text" size="35" <?php if($especialista==''){echo 'placeholder="Ingrese su especialidad"';}else{ echo "value=$especialista"; }?> enabled name="especialista">
				<input type="checkbox" name="primera" <?if($seleccion==1){echo 'checked="checked"';}?> >Primera vez
				<input type="checkbox" name="control" <?if($seleccion==2){echo 'checked="checked"';}?> >Control
				<input type="checkbox" name="ausente" <?if($seleccion==3){echo 'checked="checked"';}?> >Ausente
		<br>
		<textarea class="AreaTexto">Observaciones</textarea>
		<textarea class="AreaTexto">Diagnóstico</textarea>

		<input type="submit" name="guardar" value="Guardar">
		<input type="submit" name="Volver_inicio" value="Volver al Inicio">
		</fieldset>
		</form>
</body>
</html>

