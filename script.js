let runDraw = false;
let cardNumIn = [];
let cardNumOut = [];
for (let i = 1; i <= 75; i++) {
    cardNumIn.push(i);
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
    $('#ball').text(randomCarNum);
    $('#card-num-' + randomCarNum).addClass('bg-info').addClass('text-white');
    $('#results').append('<button class="btn btn-light btn-lg d-flex justify-content-center align-items-center result-wh mr-2 mb-2 shadow-sm">' + randomCarNum + '</button> ');
    $('#results button:last-child').focus();
}

function removeNum(num) {
    let index = cardNumIn.indexOf(num);
    if (index !== -1) cardNumIn.splice(index, 1);
}
