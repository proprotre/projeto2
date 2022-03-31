let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -22.114226, lng: -51.376179 },
    zoom: 100,
  });
}

function validarNome(){
	var aux1 = document.getElementById('inputName').value;

	if(aux1){
		document.getElementById('inputName').style.borderColor = 'green';
		document.getElementById('aux1').style.color = 'green';
		document.getElementById('aux1').innerHTML = '';
	}else{
		document.getElementById('inputName').style.borderColor = 'red';
		document.getElementById('aux1').style.color = 'red';
		document.getElementById('aux1').innerHTML = "Campo nome obrigatório.";
	}

}

function validarEmail(){
	var aux2 = document.getElementById('inputEmail').value;

	if(aux2){
		document.getElementById('inputEmail').style.borderColor = 'green';
		document.getElementById('aux2').style.color = 'green';
		document.getElementById('aux2').innerHTML = '';
	}else{
		document.getElementById('inputEmail').style.borderColor = 'red';
		document.getElementById('aux2').style.color = 'red';
		document.getElementById('aux2').innerHTML = "Campo e-mail obrigatório.";
	}

}

function validarMensagem(){
	var aux3 = document.getElementById('Textarea1').value;

	if(aux3){
		document.getElementById('Textarea1').style.borderColor = 'green';
		document.getElementById('aux3').style.color = 'green';
		document.getElementById('aux3').innerHTML = '';
	}else{
		document.getElementById('Textarea1').style.borderColor = 'red';
		document.getElementById('aux3').style.color = 'red';
		document.getElementById('aux3').innerHTML = "Campo mensagem obrigatório.";
	}

}

