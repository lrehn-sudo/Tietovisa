//---------check radiobutton is selected

function validateRadio() {
    var radios = document.getElementsByName('correct');
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid) alert("Oikea vastaus täytyy valita");
    return formValid;
}
