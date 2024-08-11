var number = 1;
var folderPath = "images/";

function updateImage() {
    const images = [
        { src: folderPath + "wide.jpg", alt: "A snowy field." },
        { src: folderPath + "crows.jpg", alt: "Crows on a phone line." },
        { src: folderPath + "catt.jpg", alt: "A cartoon cat." },
        { src: folderPath + "bowling.jpg", alt: "AnnaMaria, Jimmi, Pjotr, Afrouz, Hobac, Clarisse, Eric, and Hayat bowling." }
    ];

    var currentImg = images[number - 1];
    const myImg = document.getElementById("myImg");
    myImg.src = currentImg.src;
    myImg.alt = currentImg.alt;
}

function nextImage() {
    number = number >= 4 ? 1 : number + 1;
    updateImage();
}

function prevImage() {
    number = number <= 1 ? 4 : number - 1;
    updateImage();
}

function goToImage() {
    const index = parseInt(document.getElementById("imageIndex").value);
    if (index >= 1 && index <= 4) {
        number = index;
        updateImage();
    } else {
        alert("Please enter an index between 1 and 4.");
    }
}

// Initialize image display
updateImage();

// Initialize jQuery draggable after DOM is fully loaded
$(document).ready(function () {
    $("#gallery").draggable();
});
