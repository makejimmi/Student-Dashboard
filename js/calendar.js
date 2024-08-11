var file = "";
var currentWeek = 0;
var weeks = [];
var tableHeader = "";
var days = null;
var newEvent = "";

$(function () {
    $("#calendar-widget").draggable();

    $("#Open").click(function () {
        none("Open");
        inlineBlock("fileInput");
        inlineBlock("Close");
    });

    $("#Close").click(function () {
        inlineBlock("Open");
        none("fileInput");
        none("calendarControls");
        none("Close");
        none("calendarFrame");
    });

    $("#fileInput").on("input", function () {
        loadDataFromServer();
        var reader = new FileReader();
        reader.onload = function (e) {
            var parser = new DOMParser();
            var doc = parser.parseFromString(e.target.result, "text/html");

            tableHeader = doc.querySelector("thead").outerHTML;
            weeks = extractWeeks(doc);
            displayWeek();

            inlineBlock("calendarControls");
            inlineBlock("calendarFrame");
        };
        reader.readAsText(document.getElementById("fileInput").files[0]);
    });

    $("#prevWeek").click(function () {
        if (currentWeek > 0) {
            currentWeek--;
            displayWeek();
        }
    });

    $("#nextWeek").click(function () {
        if (currentWeek < weeks.length - 1) {
            currentWeek++;
            displayWeek();
        }
    });

    $("#saveData").click(function () {
        saveDataToServer();
    });

    $("#loadData").click(function () {
        loadDataFromServer();
    });

    $(window).resize(function () {
        adjustTableSize();
    });
    adjustTableSize();
});

function none(id) {
    document.getElementById(id).style.display = "none";
}

function inlineBlock(id) {
    document.getElementById(id).style.display = "inline-block";
}

function extractWeeks(doc) {
    var weeks = [];
    var week = [];
    days = doc.querySelectorAll("tbody tr");

    days.forEach(function (day, index) {
        week.push(day.outerHTML);
        if ((index + 1) % 7 == 0) {
            weeks.push(week);
            week = [];
        }
    });

    if (week.length > 0) {
        weeks.push(week);
    }
    return weeks;
}

function displayWeek() {
    var calendarFrame = document.getElementById("calendarFrame");
    calendarFrame.innerHTML = '<div class="table-container"><table class="table table-bordered">' + tableHeader + '<tbody>' + weeks[currentWeek].join('') + '</tbody></table></div>';
    adjustTableSize();
}

function adjustTableSize() {
    var calendarFrame = document.getElementById("calendarFrame");
    var table = calendarFrame.querySelector("table");
    if (table) {
        table.style.width = "auto";
        table.style.height = "auto";
        var thElements = table.querySelectorAll("th");
        var tdElements = table.querySelectorAll("td");
        thElements.forEach(function (element) {
            element.style.fontSize = "14px";
        });
        tdElements.forEach(function (element) {
            element.style.fontSize = "14px";
            element.setAttribute("tabindex", "0"); // Make cells focusable
            element.addEventListener('mouseover', function (e) {
                e.target.style.backgroundColor = '#ffc107';
                element.onclick = function () {
                    var cellCol = e.target.cellIndex;
                    if (e.target.innerHTML == '') {
                        var newEvent = prompt("Enter or edit event");
                        if (newEvent != null) {
                            e.target.innerHTML = newEvent;
                            var htmlSnippet = (weeks[currentWeek])[e.target.parentNode.rowIndex - 1];
                            var editedHtmlSnippet = "";
                            editedHtmlSnippet = htmlSnippet;
                            for (var i = 0; i < cellCol; i++) {
                                editedHtmlSnippet = editedHtmlSnippet.replace('"><', '">' + newEvent + '<');
                            }
                            for (var i = 0; i < (cellCol - 1); i++) {
                                editedHtmlSnippet = editedHtmlSnippet.replace('">' + newEvent + '<', '"><');
                            }
                            console.log(editedHtmlSnippet);
                            weeks[currentWeek][e.target.parentNode.rowIndex - 1] = editedHtmlSnippet;
                        }
                    } else if (e.target.innerHTML != '') {
                        var toRemoveEvent = e.target.innerHTML;
                        e.target.innerHTML = '';
                        var removeEvent = (weeks[currentWeek][e.target.parentNode.rowIndex - 1]);
                        weeks[currentWeek][e.target.parentNode.rowIndex - 1] = removeEvent.replace(toRemoveEvent, '');
                    } else {
                        e.target.innerHTML = '';
                    }
                };
            });
            element.addEventListener('mouseout', function (e) {
                e.target.style.backgroundColor = '';
            });

            element.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    element.click();
                }
            });
        });
    }
}

function saveDataToServer() {
    $.ajax({
        url: 'http://localhost/webaFinal/save_calendar.php',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(weeks),
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.error('Error saving data:', error);
        }
    });
}

function loadDataFromServer() {
    $.ajax({
        url: 'http://localhost/webaFinal/calendar.json',
        method: 'GET',
        contentType: 'application/json',
        success: function (response) {
            weeks = response;
            console.log(weeks);
            displayWeek();
        },
        error: function (error) {
            console.error('Error loading data:', error);
        }
    });
}