const boxes = document.querySelectorAll('.boxes');
const obj = document.querySelectorAll('.objective-contents');
// const right = document.querySelectorAll('.box-right');


window.addEventListener("scroll", function checkBox(){
    const trigBottom = 630;
    const trigTop = 15;
    
    //trigbottom 544
    boxes.forEach(box =>{
        // const boxBottom = box.getBoundingClientRect().bottom;
        const boxTop = box.getBoundingClientRect().top;

        if(boxTop < trigTop){
            box.classList.add('show');
            
        } else {
            box.classList.remove('show');
            
        }
    })

    obj.forEach(objs =>{
        const boxBottom = objs.getBoundingClientRect().bottom;
        // const boxTop = objs.getBoundingClientRect().top;

        if(boxBottom < trigBottom){
            objs.classList.add('show');
            
        } else {
            objs.classList.remove('show');
            
        }
    })
});     

//edit button

const modal = document.querySelector('.modal');
const savebtn = document.querySelector('.save');
const display = document.querySelector('.edit-display');
const editbtn = document.querySelector('.editbtn');


editbtn.addEventListener('click', () => {
    modal.style.display = "block";
    display.style.display = "none";
})

window.addEventListener('scroll', ()=>{
    modal.style.display = "none";
    display.style.display = "block";
})