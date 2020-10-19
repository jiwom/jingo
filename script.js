var runDraw = false;
var cardNumIn = [];
var cardNumOut = [];
for (var i = 1; i <= 75; i++) {
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
});

function drawNum() {
    var randomCarNum = cardNumIn[Math.floor(Math.random() * cardNumIn.length)];
    cardNumOut.push(randomCarNum);
    removeNum(randomCarNum);
    $('#ball').text(randomCarNum);
    $('#card-num-' + randomCarNum).addClass('bg-info');

    $('#results').append('<button class="btn btn-light btn-lg ">' + randomCarNum + '</button> ');
    $('#results button:last-child').focus();
}

function removeNum(num) {
    var index = cardNumIn.indexOf(num);
    if (index !== -1) cardNumIn.splice(index, 1);
}