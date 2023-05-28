var skip = document.getElementById('skip');
var scor = document.getElementById('scor');
var totalScore = document.getElementById('totalScore');
var countdown = document.getElementById('countdown');
var count = 0;
var scoreCount = 0;
var time = 0;
var questions = document.querySelectorAll('.question');
var answer = document.querySelectorAll('.question .answer input');

skip.addEventListener('click', function(){
    nextQuestion();
    time = 20;
})

answer.forEach(function(sng){

    sng.addEventListener('click', function(){
        setTimeout(function(){
            nextQuestion();
            time = 20;
        }, 500)

    var valid = this.getAttribute("valid");
    if(valid == "valid")
    {
        scoreCount++;
        scor.innerHTML = scoreCount;
        totalScore.innerHTML = scoreCount * 5;
    }

    })

});

function nextQuestion(){
    count++;

    for (var i = 0 ; i <questions.length; i++)
    {
        questions[i].className = 'question';
    }

    questions[count].className='question active';

    if(count == questions.length - 1)
    {
        skip.style.display = 'none';
        clearInterval(timeR);
        countdown.innerHTML = 0;
    }

}

var timeR = setInterval(function(){
    if(time == 20)
    {
        time = 0;
    }
    time++;
    
    countdown.innerHTML = time;

    if(countdown.innerHTML == "20")
    {
        nextQuestion()
    }

}, 1000)