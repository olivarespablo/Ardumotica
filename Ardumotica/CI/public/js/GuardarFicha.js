function GuardarDatos () {
	alert("Ha sido guardado exitosamente");
	window.location.assign("/CI/index.php/portal/profesional");
}
function volverInicio () {
	window.location.assign("/CI/index.php/portal/inicio");
}

window.onload = function(){
	var botonGuardar = document.getElementById("Guardar_Datos");
	botonGuardar.onclick = GuardarDatos;
	var botonVolver = document.getElementById("Volver_inicio");
	botonVolver.onclick = volverInicio;
}