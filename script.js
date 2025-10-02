let runDraw = false;
let cardNumIn = [];
let cardNumOut = [];
for (let i = 1; i <= 75; i++) {
    cardNumIn.push(i);
}

// Function to get the column letter for a given number
function getColumnLetter(num) {
    if (num >= 1 && num <= 15) return 'J';
    if (num >= 16 && num <= 30) return 'I';
    if (num >= 31 && num <= 45) return 'N';
    if (num >= 46 && num <= 60) return 'G';
    if (num >= 61 && num <= 75) return 'O';
    return '';
}

$(function () {
    window.setInterval(function () {
        if (runDraw) {
            drawNum();
        }
    }, 5000);

    $('.btn-primary').click(function () {
        if (cardNumIn.length != 0) {
            drawNum();
            runDraw = true;
        }
    });

    $('.btn-danger').click(function () {
        runDraw = false;
    });

    $('.btn-secondary').click(function () {
        // Reset the game state
        runDraw = false;
        cardNumIn = [];
        cardNumOut = [];

        // Repopulate the cardNumIn array with numbers 1-75
        for (let i = 1; i <= 75; i++) {
            cardNumIn.push(i);
        }

        // Clear the ball display
        $('#ball').text('');

        // Reset all number cards to original state
        for (let i = 1; i <= 75; i++) {
            $('#card-num-' + i).removeClass('bg-info').removeClass('text-white');
        }

        // Clear the results display
        $('#results').empty();
    });
    
});

function drawNum() {
    let randomCarNum = cardNumIn[Math.floor(Math.random() * cardNumIn.length)];

    if (randomCarNum === undefined) {
        alert('No More Numbers to Read!');
        return false;
    }

    cardNumOut.push(randomCarNum);
    removeNum(randomCarNum);

    // Get the column letter and format the display
    let columnLetter = getColumnLetter(randomCarNum);
    let displayText = columnLetter + ' - ' + randomCarNum;

    $('#ball').text(displayText);
    $('#card-num-' + randomCarNum).addClass('bg-info').addClass('text-white');
    $('#results').append('<button class="btn btn-light btn-lg d-flex justify-content-center align-items-center result-wh mr-2 mb-2 shadow-sm">' + displayText + '</button> ');
    $('#results button:last-child').focus();
}

function removeNum(num) {
    let index = cardNumIn.indexOf(num);
    if (index !== -1) cardNumIn.splice(index, 1);
}
