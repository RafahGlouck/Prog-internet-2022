const mario =document.querySelector("#mario");

document.addEventListener("keypress",(event)=>{
    mario.classList.add("jump");
    setTimeout(()=>{
        mario.classList.remove("jump");
    },900);
})