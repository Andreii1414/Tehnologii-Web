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

function verifyImage(){
    let correct = 0;

    const im = squares[0].firstChild;
    if(im && im.getAttribute("valid") === "valid1"){
        correct = correct + 1;
    }

    const im2= squares[1].firstChild;
    if(im2 && im2.getAttribute("valid") === "valid2"){
        correct = correct + 1;
    }

    alert("Ai ales corect " + correct + "/" + squares.length + " indicatoare")
    

}
