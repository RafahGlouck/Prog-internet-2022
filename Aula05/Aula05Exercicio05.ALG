Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022
Var
// Se��o de Declara��es das vari�veis 
  intNFat : inteiro
  intI : inteiro
  intRes : inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
  escreval("Programa fatorial")
  escreval("Digite o numero a ser feito o fatorial:")
  leia(intNFat)
  intRes := 1;
  para intI de intNFat ate 2 passo -1 faca
    intRes := intRes * intI
  fimpara
  escreval("O resultado � ",intRes)

Fimalgoritmo