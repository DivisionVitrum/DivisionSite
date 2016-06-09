function Niels() {
    //Haalt Levi + Roy weg
    document.getElementById("levi").style.display="none";
    document.getElementById("roy").style.display="none";
    document.getElementById("niels").className = "animated pulse";

    //Toont "terug" knop
    document.getElementById("back").style.display="flex";

    //Toont tekst
    document.getElementById("nbio").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet nibh nisl. Phasellus auctor nulla id lectus finibus, sit amet iaculis est tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean orci nulla, fringilla ut tortor sit amet, ornare tincidunt est. Phasellus ullamcorper dictum leo, eu gravida elit aliquet at. Vestibulum ut velit lectus. Etiam interdum convallis lorem sed dictum. Duis maximus massa in lorem ornare, id pretium risus blandit. Cras at eros quis nibh aliquam suscipit quis id massa. Morbi rhoncus rhoncus lorem in gravida. Nunc eget aliquam sem, ut egestas lectus. Nunc sit amet tempus purus, eget venenatis justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.!";
    
    document.getElementById("nquote").innerHTML = "Intuition fears dimensionless silence";
    
    document.getElementById("nquote").style.display = "block";
    document.getElementById("nbio").style.display = "block";
}

function Roy() {
    document.getElementById("niels").style.display="none";
    document.getElementById("levi").style.display="none";
    document.getElementById("roy").className = "animated bounce";

    document.getElementById("back1").style.display="flex";

    document.getElementById("rbio").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet nibh nisl. Phasellus auctor nulla id lectus finibus, sit amet iaculis est tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean orci nulla, fringilla ut tortor sit amet, ornare tincidunt est. Phasellus ullamcorper dictum leo, eu gravida elit aliquet at. Vestibulum ut velit lectus. Etiam interdum convallis lorem sed dictum. Duis maximus massa in lorem ornare, id pretium risus blandit. Cras at eros quis nibh aliquam suscipit quis id massa. Morbi rhoncus rhoncus lorem in gravida. Nunc eget aliquam sem, ut egestas lectus. Nunc sit amet tempus purus, eget venenatis justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.";
    
    document.getElementById("rquote").innerHTML = "Intuition fears dimensionless silence";
    
    document.getElementById("rquote").style.display = "block";
    document.getElementById("rbio").style.display = "block";
}

function Levi() {
    document.getElementById("roy").style.display="none";
    document.getElementById("niels").style.display="none";
    document.getElementById("levi").className = "animated flash";

    document.getElementById("back2").style.display="flex";

    document.getElementById("lbio").innerHTML = "Ik ben Levi Laaper, ik ben 19 jaar en ik ben eerste jaar Creative Media and Game Technology student aan de hogeschool Rotterdam. Mijn ambitie is om out of the box te blijven denken en creative en vernieuwende technologiën toe passen in gave projecten. Ik waardeer open en eerlijkheid in een gesprek en probeer altijd vanuit een developers mindset na te denken over de mogelijkheden."
    
    document.getElementById("lquote").innerHTML = "Een uitdaging betekend vernieuwing.";
    
    document.getElementById("lquote").style.display = "block";
    document.getElementById("lbio").style.display = "block";
}

function Back() { // Zet alles weer terug
	// Niels
    document.getElementById("niels").style.display="flex";
    document.getElementById("nbio").style.display="none";
    document.getElementById("nquote").style.display="none";
    document.getElementById("back").style.display="none";
    document.getElementById("niels").className = "";

    // Roy
	document.getElementById("roy").style.display="flex";
    document.getElementById("rbio").style.display="none";
    document.getElementById("rquote").style.display="none";
    document.getElementById("back1").style.display="none";
    document.getElementById("roy").className = "";

    // Levi
	document.getElementById("levi").style.display="flex";
    document.getElementById("lbio").style.display="none";
    document.getElementById("lquote").style.display="none";
    document.getElementById("back2").style.display="none";
    document.getElementById("levi").className = "";
}