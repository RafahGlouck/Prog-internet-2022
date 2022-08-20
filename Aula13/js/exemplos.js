//const disp= document.getElementById("display");
const disp= document.querySelector("#display");

//Aqui selecionando todas as classes que estão usando a class btn
//const btns= document.getElementsByClassName("btn");
const btns= document.querySelectorAll(".btn");

function minhafuncao() {
    //Nesse ponto estou buscando no html um item que tem id chamado display
  
    alert("O valor display é " + disp.innerHTML)
}
console.log(btns)
Array.from(btns).forEach(btn => {
    //console.log(btn)
    btn.addEventListener("click",()=>{
        alert("Você clicou no btn " + btn.dataset.valor);
        disp.innerHTML = btn.dataset.valor;
    })
    
});