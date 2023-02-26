

// function change() {
//     const box1=document.querySelector(".aboutBox1");
//     const box2=document.querySelector(".aboutBox2");
//     const box3=document.querySelector(".aboutBox3");
//     const box4=document.querySelector(".aboutBox4");
//     const mainBox=document.querySelector(".circle-two");

//     mainBox.style.cssText = '    border: 336px solid #ff0066; transform: scale(1)'

//     console.log("hello");

// }



// function display() {
//     console.log("helloa")
//     box2.style.cssText = '  filter: blur(0.5);'
//     box3.style.cssText = '  filter: blur(0.5);'
//     box4.style.cssText = '  filter: blur(0.5);'

// }

let blocks = document.querySelectorAll('.about-feature');
let circle2 = document.querySelector('.circle-two');

var overBlocks = function(ind){
    blocks.forEach((block)=>{
        block.classList.add('block-active');
    });
    blocks[ind].classList.remove('block-active');
    circle2.style.borderColor = blocks[ind].dataset.color;
}

var leaveBlocks = function(){
    blocks.forEach((block)=>{
        block.classList.remove('block-active');
    })
    circle2.style.borderColor = '#fb3384';
}

blocks.forEach((block,i)=>{
    block.addEventListener('mouseenter',()=>{
        overBlocks(i);
    })
    block.addEventListener('mouseleave',()=>{
        leaveBlocks();
    })
})


// menu bar 
function toggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}


var element = document.getElementById('elementID');
if(element.style.display === "none"){
  element.style.display = "block";
}else{
  element.style.display = "none";
}