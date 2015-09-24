function Volver () {
	window.location.assign("inicio");
}

window.onload = function(){
	var botonVolver = document.getElementById("Volver_Inicio");
	botonVolver.onclick = Volver;
}