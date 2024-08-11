const displayinput = document.getElementById('displayinput');

function append (input) {
    if (displayinput.value == 0){
        displayinput.value = input;
    } else {
        displayinput.value += input;
    }
}

function clearDisplay () {
    displayinput.value = "0";
}

function calculate () {
    try{
        displayinput.value = eval (displayinput.value);
    }
    catch(error){
        displayinput.value = "ERROR";
    }
}

// Drag the gallery using jQuery
$(document).ready(function() {
    $("#calculatorWidget").draggable();
});