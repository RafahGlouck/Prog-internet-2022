Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/05/2022
Var
// Se��o de Declara��es das vari�veis 
// Se��o de Declara��es das vari�veis
  intValor : inteiro
  intDezena : inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
  escreval("Digite um valor de at� 3 d�gitos:")
  leia(intValor)
  intDezena <- intValor mod 100 div 10 //mod == %
  escreval("A dezena � ", intDezena)
Fimalgoritmo