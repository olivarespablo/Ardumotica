function Obtener_Estadistica () {
	window.location.assign("mostrarEstadisticas");
}

window.onload = function(){
	var botonCrear = document.getElementById("Obtener");
	botonCrear.onclick = Obtener_Estadistica;
}