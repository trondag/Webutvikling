window.onload = oppstart;

var data;

function oppstart(){

    document.getElementById("menyKnapp").onclick = visMeny;


}

function visMeny(){

    document.getElementById("menyElementer").className = "vistMeny";
    document.getElementById("menyKnapp").onclick = skjulMeny;
    document.getElementById("menyKnapp").src="bilder/ikoner/kryss.png";
}

function skjulMeny(){

    document.getElementById("menyElementer").className = "skjultMeny";
    document.getElementById("menyKnapp").onclick = visMeny;
    document.getElementById("menyKnapp").src="bilder/ikoner/menyikon.png";
}