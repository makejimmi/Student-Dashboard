
$(document).ready(function() {
    const weatherElement = $('#weather-data');
    const apiKey = 'd386c7b27959325cb5be10f5960b3981';
    const city = 'Vienna';
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;

    $.getJSON(apiUrl, function(data) {
        const temp = data.main.temp;
        const weatherDescription = data.weather[0].description;
        weatherElement.text(`Vienna: ${temp}°C, ${weatherDescription}`);
    })
    .fail(function() {
        weatherElement.text('Weather info unavailable');
    });
});

$(document).ready(function() {
    function updateDateTime() {
        const now = new Date();
        const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
        const dateString = now.toLocaleDateString('en-US', options);
        $('#date').text(dateString);
        $('#digital-time').text(now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit' }));
    }

    function updateAnalogClock() {
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();

        const hourDegree = (hours * 30) + (0.5 * minutes);
        const minuteDegree = (minutes * 6) + (0.1 * seconds);
        const secondDegree = seconds * 6;

        $('#hour').css('transform', `rotate(${hourDegree}deg)`);
        $('#minute').css('transform', `rotate(${minuteDegree}deg)`);
        $('#second').css('transform', `rotate(${secondDegree}deg)`);
    }

    updateDateTime();
    updateAnalogClock();

    setInterval(updateDateTime, 1000);
    setInterval(updateAnalogClock, 1000);
});


$(document).ready(function() {
    // Hide the widget when close button is clicked
    $(".btn-close").click(function() {
        $(this).closest(".widget").hide();
    });

    // Show the widget when the corresponding navbar link is clicked
    $("a.nav-link").click(function(event) {
       // event.preventDefault(); // Prevent default anchor behavior
        var target = $(this).attr("href");
        $(target).show();
    });
});

// Function to increase text size
function increaseTextSize() {
    document.body.classList.add('font-large');
}

// Function to further increase text size
function increaseTextSizeMore() {
    document.body.classList.add('font-largest');
}

// Function to reset text size to default
function resetTextSize() {
    document.body.classList.remove('font-large', 'font-largest');
}
