function crear(){

	alert("La Ficha ha sido creada");
	window.location.assign("/CI/index.php/portal/inicio");
}

function cancelar () {
	window.location.assign("/CI/index.php/portal/inicio");
}

window.onload = function(){
	var botonCrear = document.getElementById("CrearFicha");
	botonCrear.onclick = crear;
	var botonCancelar = document.getElementById("CancelarFicha");
	botonCancelar.onclick = cancelar;
}