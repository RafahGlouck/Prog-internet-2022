Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/05/2022
Var
// Se��o de Declara��es das vari�veis
  i : inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
  escreval("Usando o enquanto")
  i <- 100
  enquanto i >= 1 faca
    escreva(i, " ")
    i <- i - 1
  fimenquanto
  escreval("-----------------------")
  escreval("Usando o Repita")
  //Iniciando o repita
  i <- 100
  repita
    escreva(i, " ")
    i <- i - 1
  ate i < 1
  escreval("-----------------------")
  escreval("Usando o Para")
  //Iniciando o para
  para i de 100 ate 1 passo -1 faca
    escreva(i, " ")
  fimpara
Fimalgoritmo