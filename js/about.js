function Niels() {
    //Haalt Levi + Roy weg
    document.getElementById("levi").style.display="none";
    document.getElementById("roy").style.display="none";

    //Toont "terug" knop
    document.getElementById("back").style.display="flex";

    //Toont tekst
    document.getElementById("n bio").innerHTML = "Hey!";
    document.getElementById("n bio").style.display = "block";
}

function Roy() {
    document.getElementById("niels").style.display="none";
    document.getElementById("levi").style.display="none";

    document.getElementById("back1").style.display="flex";

    document.getElementById("r bio").innerHTML = "Hey!";
    document.getElementById("r bio").style.display = "block";
}

function Levi() {
    document.getElementById("roy").style.display="none";
    document.getElementById("niels").style.display="none";

    document.getElementById("back2").style.display="flex";

    document.getElementById("l bio").innerHTML = "Hey!"
    document.getElementById("l bio").style.display = "block";
}

function Back() { // Zet alles weer terug
	// Niels
    document.getElementById("niels").style.display="flex";
    document.getElementById("n bio").style.display="none";
    document.getElementById("back").style.display="none";

    // Roy
	document.getElementById("roy").style.display="flex";
    document.getElementById("r bio").style.display="none";
    document.getElementById("back1").style.display="none";

    // Levi
	document.getElementById("levi").style.display="flex";
    document.getElementById("l bio").style.display="none";
    document.getElementById("back2").style.display="none";
}