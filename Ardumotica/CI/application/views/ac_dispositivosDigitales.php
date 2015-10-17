<html>
<title>Ardumótica</title>
<h1 align='center'>Ardumótica</h1><h3 align='center'>Encienda o apague el sensor o artefacto</h3>
<body>   

				<fieldset >
					<div class="dispositivos">ON/OFF
			<form action="/CI/index.php/portal2/establecerEstados/1" method="post">

				<br>Pin 0 <input type="checkbox" name="pin0" <?if($pin0==1){echo 'checked="checked"'; file('http://192.168.0.100/analog/0/1');} else{ file('http://192.168.0.100/digital/0/0'); }?> ><br>
				Pin 1 <input type="checkbox" name="pin1" <?if($pin1==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/1/1');} else{ file('http://192.168.0.100/digital/1/0'); }?> ><br>
				Pin 2 <input type="checkbox" name="pin2" <?if($pin2==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/2/1');} else{ file('http://192.168.0.100/digital/2/0'); }?> ><br>
				Pin 3 <input type="checkbox" name="pin3" <?if($pin3==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/3/1');} else{ file('http://192.168.0.100/digital/3/0'); }?> ><br>
				Pin 4 <input type="checkbox" name="pin4" <?if($pin4==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/4/1');} else{ file('http://192.168.0.100/digital/4/0'); }?> ><br>
				Pin 5 <input type="checkbox" name="pin5" <?if($pin5==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/5/1');} else{ file('http://192.168.0.100/digital/5/0'); }?> ><br>
				Pin 6 <input type="checkbox" name="pin6" <?if($pin6==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/6/1');} else{ file('http://192.168.0.100/digital/6/0'); }?> ><br>
				Pin 7 <input type="checkbox" name="pin7" <?if($pin7==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/7/1');} else{ file('http://192.168.0.100/digital/7/0'); }?> ><br>
				Pin 8 <input type="checkbox" name="pin8" <?if($pin8==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/8/1');} else{ file('http://192.168.0.100/digital/8/0'); }?> ><br>
				Pin 9 <input type="checkbox" name="pin9" <?if($pin9==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/9/1');} else{ file('http://192.168.0.100/digital/9/0'); }?> ><br>
				Pin 10 <input type="checkbox" name="pin10" <?if($pin10==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/10/1');} else{ file('http://192.168.0.100/digital/10/0'); }?> ><br>
				Pin 11 <input type="checkbox" name="pin11" <?if($pin11==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/11/1');} else{ file('http://192.168.0.100/digital/11/0'); }?> ><br>
				Pin 12 <input type="checkbox" name="pin12" <?if($pin12==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/12/1');} else{ file('http://192.168.0.100/digital/12/0'); }?> ><br>
				Pin 13 <input type="checkbox" name="pin13" <?if($pin13==1){echo 'checked="checked"'; file('http://192.168.0.100/digital/13/1');} else{ file('http://192.168.0.100/digital/13/0'); }?> ><br>

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

