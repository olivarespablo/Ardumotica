<html>
<title>Ardumótica</title>
<h1 align='center'>Ardumótica</h1><h3 align='center'>LED controlado a través de la Web con Arduino</h3>

<body>   
<div class="inicioArduino" style='text-align:center;'>
<?php echo form_open('login/index/'); ?>
<div id="LoginUsuarios">
   <div class="fila">
      <div class="LoginUsuariosCabecera">E-mail:</div>
      <div class="LoginUsuariosDato"><input type="text" name="maillogin" value="<?= set_value('maillogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError">
      <?
      if(isset($error)){
         echo "<p>".$error."</p>";
      }
      echo form_error('maillogin');
      ?>
      </div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera">Contraseña:</div>
      <div class="LoginUsuariosDato"><input type="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError"><?= form_error('passwordlogin');?></div>
   </div>
   <div class="fila">
      <div class="LoginUsuariosCabecera"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera"><input type="submit" value="Ingresar"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
</div>
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
.inicioArduino { border:solid 1px #2d2d2d;  text-align:center; background:#575757; padding:100px 50px 100px 50px;  -moz-border-radius: 5px;  -webkit-border-radius: 5px; border-radius: 5px;}

</style>
</html>