let xhr = null;
let method = "GET"; 
let url = "array-auslesen.php"; 
let params = ""; 
let async = true; 

window.addEventListener("load", init);

function init(){
	let marke = document.getElementById('marke');
	marke.addEventListener('blur', buchungsAnfrage);
}

function buchungsAnfrage(){		
	xhr = new XMLHttpRequest(); 
	
	let marke = document.getElementById('marke');
	params = 'marke=' + marke.value;
	
	if (xhr) {
		xhr.open(method, url + "?" + params, async); 
		xhr.onload = antwortAuslesen; 
		xhr.send();
	} else {
		alert("Fehler: AJAX Objekt nicht erzeugt!");
	}
}	

function antwortAuslesen() { 
	let ausgabe = document.getElementById('ausgabe');
	let antwort = xhr.responseText;
	ausgabe.innerHTML = antwort;
}
		