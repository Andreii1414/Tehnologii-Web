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
        totalScore.innerHTML = scoreCount * 5 + 1;
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
        
        (async () => {
            try {
              const punctaj = await getDataFromDb();

              console.log('Returned punctajQuiz:', punctaj);

              //daca are 0 inseamna ca nu a facut inca quiz-ul
              if(punctaj == 0)
                  postRequestToDb();

            } catch (error) {
              console.error('Error:', error);
            }
          })();


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

}, 1000);

//request pt a vedea cate puncte are utilizatorul la quiz
async function getDataFromDb()
{
    const categorie = 'Auxiliare'
    const headers = new Headers();
    headers.append('Category', categorie);

    try{
        const response = await fetch('/api/Points',
        {
            method: 'GET',
            headers: headers
        });

        const data = await response.json();

        const punctajQuiz = data.punctaj;
        console.log('Punctaj Quiz:', punctajQuiz);

        return punctajQuiz;
    }
    catch(error) {
        console.error('Error:', error);
        throw error;
    };
}

//Request POST pentru a adauga puncte in baza de date daca nu a facut inca quiz-ul
function postRequestToDb(){
    const puncte = scoreCount * 5 + 1;
    const categorie = 'Auxiliare'
    const headers = new Headers();
    headers.append('Puncte', puncte);
    headers.append('Category', categorie);

    fetch('/api/Points',
    {
        method: 'POST',
        headers: headers
    })

    .then(response => response.json())
    .then(data=>{
        console.log('Data:', data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}