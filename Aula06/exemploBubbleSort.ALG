Algoritmo "semnome"

procedimento bubbleSort()
var
  li, lf : inteiro
  apoio  : caracter
inicio
  para li de 1 ate 9 faca
    para lf de li ate 10 faca
      //ordem ascendente
      se itens[li] > itens[lf] entao
        apoio <- itens[lf]
        itens[lf] <- itens[li]
        itens[li] <- apoio
      fimse
    fimpara
  fimpara
fimprocedimento

Var
// Se��o de Declara��es das vari�veis 
  itens : vetor [1..10] de caracter
  i : inteiro
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
 aleatorio on
 para i de 1 ate 10 faca
   leia(itens[i])
 fimpara
 aleatorio off
 bubbleSort()
 escreval("Listando os valores classificados!")
 para i de 1 ate 10 faca
   escreval(itens[i])
 fimpara
 
Fimalgoritmo