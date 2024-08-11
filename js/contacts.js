// Drag the contacts using jQuery
$(document).ready(function() {
    $("#contacts").draggable();
});

function searchMoodle(event) {
    var name = document.getElementById("SearchMoodleName").value;
    event.preventDefault(); 
    // Create the search link with first and last name
    var link = "https://moodle.technikum-wien.at/search/index.php?context=1481764&q=" + encodeURIComponent(name);
    window.location.href = link;
}

function CISsearch(event){
    event.preventDefault(); // Prevent the form from being sent in the conventional way
        var searchQuery = document.getElementById('SearchNameCIS').value;
        var encodedQuery = encodeURIComponent(searchQuery);
        var url = `https://cis.technikum-wien.at/cis/private/tools/suche.php?search=${encodedQuery}`;
        window.location.href = url; // Redirect to URL

}