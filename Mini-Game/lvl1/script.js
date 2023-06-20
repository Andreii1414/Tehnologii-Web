const images = document.querySelectorAll('.draggable');
const square = document.querySelector('.droppable');

images.forEach((image) => {
    image.addEventListener('dragstart', dragStart);
});

let draggedImage = null;
let corecte = 0;

//sunt create event-uri pentru patratele in care vor fi trase imaginile
square.addEventListener('dragover', dragOver);
square.addEventListener('drop', drop);

//event care incepe atunci cand o imagine incepe sa fie trasa
function dragStart(event) {
    draggedImage = this; //este retinuta imaginea
    const imageData = {
        src: event.target.src,
        valid: event.target.getAttribute('valid')
    };
    event.dataTransfer.setData('application/json', JSON.stringify(imageData)); //sunt transferate datele relevante (sursa, validitate)
}

function dragOver(event) {
    event.preventDefault();
}

//imaginea a primit drop pe un patrat
function drop(event) {
    event.preventDefault();
    const draggedImageData = event.dataTransfer.getData('application/json'); //sunt primite datele de mai sus
    if (draggedImageData) {
        const { src, valid } = JSON.parse(draggedImageData);
        //este copiata imaginea in patratul corespunzator
        const copy = document.createElement('img');
        copy.src = src;
        square.innerHTML = '';
        copy.classList.add('sp');
        copy.setAttribute('valid', valid);
        square.appendChild(copy);
    }
}

const vButton = document.querySelector('.btn');
vButton.addEventListener('click', verifyImage);

function verifyImage() {
    const droppedImage = square.firstChild;
    if (droppedImage && droppedImage.getAttribute("valid") === "valid") {
        corecte++;
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

    alert("Ai ales corect " + corecte + "/1 indicatoare");
    window.location.href = '../mini-game.php';
}

//request pentru a returna numarul de puncte pentru nivelul curent
async function getDataFromDb() {
    const categorie = 'Level1'
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

//request care scrie in baza de date numarul de puncte primit la nivelul curent
function postRequestToDb() {
    const puncte = corecte * 5 + 1;
    const categorie = 'Level1'
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