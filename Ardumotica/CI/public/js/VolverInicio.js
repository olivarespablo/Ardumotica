function Volver () {
	window.location.assign("inicio");
}

window.onload = function(){
	var botonVolver = document.getElementById("VolverInicio");
	botonVolver.onclick = Volver;
}