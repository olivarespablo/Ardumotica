<html>
<title>Ardumótica</title>
<h1 align='center'>Ardumótica</h1><h3 align='center'>Encienda o apague el sensor o artefacto</h3>
<body>   

				<fieldset >
					<div class="dispositivos">ON/OFF
			<form action="/CI/index.php/portal2/establecerEstados/2" method="post">

				<br>Pin 0 <input type="checkbox" name="pin0" <?if($pin0==1){echo 'checked="checked"';}?> ><br>
				Pin 1 <input type="checkbox" name="pin1" <?if($pin1==1){echo 'checked="checked"';}?> ><br>
				Pin 2 <input type="checkbox" name="pin2" <?if($pin2==1){echo 'checked="checked"';}?> ><br>
				Pin 3 <input type="checkbox" name="pin3" <?if($pin3==1){echo 'checked="checked"';}?> ><br>
				Pin 4 <input type="checkbox" name="pin4" <?if($pin4==1){echo 'checked="checked"';}?> ><br>
				Pin 5 <input type="checkbox" name="pin5" <?if($pin5==1){echo 'checked="checked"';}?> ><br>

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
