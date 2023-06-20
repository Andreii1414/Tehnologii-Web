const images = document.querySelectorAll('.draggable');
const squares = document.querySelectorAll('.droppable');

images.forEach((image)=>{
    image.addEventListener('dragstart', dragStart);
});

let draggedImage = null;

squares.forEach((square)=>{
    square.addEventListener('dragover', dragOver);
    square.addEventListener('drop', drop);
    square.addEventListener('dragenter', dragEnter);
    square.addEventListener('dragleave', dragLeave);
});

function dragStart(event){
    draggedImage = this;
    const imageData = {
        src: event.target.src, 
        valid: event.target.getAttribute('valid')
    };
    event.dataTransfer.setData('application/json', JSON.stringify(imageData));
}

function dragOver(event){
    event.preventDefault();
}

function drop(event){
    event.preventDefault();   
    const draggedImageData = event.dataTransfer.getData('application/json');
    if(draggedImageData){
        const {src, valid} = JSON.parse(draggedImageData);
        const copy = document.createElement('img');
        copy.src = src;
        copy.classList.add('sp');
        copy.setAttribute('valid', valid);
        const square = getSquare(event.target);
        square.innerHTML = '';
        square.appendChild(copy);
    }
}

function dragEnter(event){
    const square = getSquare(event.target);
    square.classList.add('dragover');
}

function dragLeave(event){
    const square = getSquare(event.target);
    square.classList.remove('dragover');
}

function getSquare(element) {
    if (element.classList.contains('droppable')) {
      return element;
    } else {
      return element.closest('.droppable');
    }
  }

const vButton = document.querySelector('.btn');
vButton.addEventListener('click', verifyImage);
let correct = 0;
function verifyImage(){

    const im = squares[0].firstChild;
    if(im && im.getAttribute("valid") === "valid1"){
        correct = correct + 1;
    }
    (async () => {
        try {
            const punctaj = await getDataFromDb();

            console.log('Returned punctajQuiz:', punctaj);

            //daca are 0 inseamna ca nu a facut inca level-ul
            if (punctaj == 0)
                postRequestToDb();

        } catch (error) {
            console.error('Error:', error);
        }
    })();

    alert("Ai ales corect " + correct + "/" + squares.length + " indicatoare");
    window.location.href = '../mini-game.php';
}

async function getDataFromDb() {
    const categorie = 'Level11'
    const headers = new Headers();
    headers.append('Category', categorie);

    try {
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
    catch (error) {
        console.error('Error:', error);
        throw error;
    };
}

function postRequestToDb() {
    const puncte = correct * 5 + 1;
    const categorie = 'Level11'
    const headers = new Headers();
    headers.append('Puncte', puncte);
    headers.append('Category', categorie);

    fetch('/api/Points',
        {
            method: 'POST',
            headers: headers
        })

        .then(response => response.json())
        .then(data => {
            console.log('Data:', data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}