var arr = [];

// Drag the todo list using jQuery
$(document).ready(function() {
    $("#todo-list").draggable();
    loadFromJson();
});

// Function to add a new item
function addItem() {
    var newItemText = $("#todo-input").val().trim();

    if (newItemText === "") {
        alert("Please enter an item!");
        return;
    }

    var newItem = {
        id: Date.now(),
        text: newItemText,
        completed: false
    };

    arr.push(newItem);
    saveToJson(arr);
    displayItem(newItem);

    $("#todo-input").val("");
}

// Function to remove an item
function removeItem(button) {
    var $li = $(button).closest("li");
    var itemId = $li.attr("id");
    arr = arr.filter(function(item) {
        return item.id != itemId;
    });
    saveToJson(arr);
    $li.remove();
}

// Function to toggle item completion
function toggleDone(checkbox) {
    var $label = $(checkbox).next("label");
    if (checkbox.checked) {
        $label.css("text-decoration", "line-through");
    } else {
        $label.css("text-decoration", "none");
    }

    var itemId = $(checkbox).closest("li").attr("id");
    arr = arr.map(function(item) {
        if (item.id == itemId) {
            item.completed = checkbox.checked;
            saveToJson(arr);
        }
        return item;
    });
}

// Function to display an item
function displayItem(item) {
    var $li = $("<li>").attr("id", item.id);
    var $checkbox = $("<input>").attr({
        type: "checkbox",
        class: "todo-checkbox",
        id: "checkbox-" + item.id,
        checked: item.completed
    }).on("change", function() {
        toggleDone(this);
    });

    var $label = $("<label>").attr("for", "checkbox-" + item.id).text(item.text);
    if (item.completed) {
        $label.css("text-decoration", "line-through");
    }

    var $removeButton = $("<button>").addClass("remove-item").html("&times;").on("click", function() {
        removeItem(this);
    });

    $li.append($checkbox)
        .append($label)
        .append($removeButton);

    $("#todo-items").prepend($li);
}

// Event listener for keypress event on the input field
$("#todo-input").keypress(function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        addItem();
    }
});

function saveToJson(data) {
    $.ajax({
        url: 'http://localhost/webaFinal/todo.php',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.error('Error saving data:', error);
        }
    });
}

function loadFromJson() {
    $.ajax({
        url: 'http://localhost/webaFinal/todo.json',
        method: 'GET',
        contentType: 'application/json',
        success: function (response) {
            try {
                arr = response;
                console.log(arr);
                arr.forEach(function(item) {
                    displayItem(item);
                });
            } catch (e) {
                console.error('Error parsing JSON:', e);
                console.log('Response:', response);
            }
        },
        error: function (error) {
            console.log('Error loading data:', error);
        }
    });
}
