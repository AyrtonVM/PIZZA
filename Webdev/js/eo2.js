var arrayList = [2, 3, 4, 10, 16, 15, 21, 20, 26, 27, 33, 34, 28, 29, 30]

var timerMaker = 0;
var startTime = 0;
var gameOver = false;

var nIntervId;

function myFunction(btn) {
    var startKnop = document.getElementById("hiddenDiv");
    btn.hidden = true;
    if (startKnop.style.display === "none") {
        startKnop.style.display = "block";
    } 

    else {
        startKnop.style.display = "block";
    }
}


function tileMaker(qualifiedName, value) {
    var gridContainer = document.getElementById("grid-container");
    for (var c = 0; c < 36; c++) {
        var tile = `<div id="` + c + `" class="grid-item noEntry"></div>`;
        gridContainer.innerHTML += tile;

        var index = document.getElementById(c);


        if (c == 0) {
            index.classList.replace("noEntry", "typeStart");
        }

        if (c == 35) {
            index.classList.replace("noEntry", "typeFinish");
        }


    }
    for (var a = 0; a < arrayList.length; a++) {
        var tileNumber = arrayList[a]
        var peter = document.getElementById(tileNumber - 1);

        peter.classList.replace("noEntry", "entry");

        if (tileNumber == 20) {
            peter.classList.add("bonusEntry");

        }

        if (tileNumber == 33) {
            peter.classList.add("bonusEntry");
        }


    }


}

function triggerCountdown() {
    nIntervId = window.setInterval(initTimer, 1000);
}

function initTimer() {
    if (!gameOver) {
        var timerEle = document.getElementById('timer');
        timerEle.innerHTML = '';
        timerEle.innerHTML = "Time: " + (startTime = startTime + 1);
        console.log(startTime);
    }
    else {
        alert('game over');
    }
}

function stopCountdown() {
    startTime = 0;
    window.clearInterval(nIntervId);
}

tileMaker();
triggerCountdown();

