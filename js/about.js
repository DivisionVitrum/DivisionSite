function Niels() {
    document.getElementById("levi").style.display="none";
    document.getElementById("roy").style.display="none";
    document.getElementById("back").style.display="block";
}

function Roy() {
    document.getElementById("niels").style.display="none";
    document.getElementById("levi").style.display="none";
    document.getElementById("back1").style.display="block";
}

function Levi() {
    document.getElementById("roy").style.display="none";
    document.getElementById("niels").style.display="none";
    document.getElementById("back2").style.display="block";
}

function Back() {
	document.getElementById("niels").style.display="block";
	document.getElementById("roy").style.display="block";
	document.getElementById("levi").style.display="block";
	document.getElementById("back").style.display="none";
	document.getElementById("back1").style.display="none";
	document.getElementById("back2").style.display="none";
}