const images = document.querySelectorAll('.draggable');
const square = document.querySelector('.droppable');

images.forEach((image)=>{
    image.addEventListener('dragstart', dragStart);
});

let draggedImage = null;

square.addEventListener('dragover', dragOver);
square.addEventListener('drop', drop);

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
        square.innerHTML = '';
        copy.classList.add('sp');
        copy.setAttribute('valid', valid);
        square.appendChild(copy);
    }
}

const vButton = document.querySelector('.btn');
vButton.addEventListener('click', verifyImage);

function verifyImage(){
    const droppedImage = square.firstChild;
    if(droppedImage && droppedImage.getAttribute("valid") === "valid"){
        alert("Ai ales corect la 1/1");
        //window.location.href = 'another_page.html';
    }
    else{
        alert("Ai ales corect 0/1");
        // window.location.href = 'another_page.html';
    }
}