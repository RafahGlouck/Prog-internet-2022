Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis 
  numero : inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
   escreval("Digite um n�mero inteiro:")
   leia(numero)
   
   se ( numero % 5 = 0 ) e ( numero % 3 = 0 ) entao
     escreval("O n�mero � divis�vel por 5 e por 3")
   senao
     se ( numero % 5 = 0 ) entao
       escreval("� divisivel por 5")
     senao
       se ( numero % 3 = 0 ) entao
         escreval("� divisivel por 3")
       senao
         escreval("O n�mero n�o � divis�vel por 5 e por 3")
       fimse
     fimse
   fimse
   
Fimalgoritmo