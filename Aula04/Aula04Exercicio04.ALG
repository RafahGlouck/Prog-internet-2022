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
  i <- 1
  enquanto i <= 500 faca
    se i mod 5 = 0 entao
      escreva(i, "  ")
    fimse
    i <- i + 1
  fimenquanto
  //Repita
  escreval("--------------------")
  escreval("Usando o Repita")
  i <- 1
  repita
    se i mod 5 = 0 entao
      escreva(i, "  ")
    fimse
    i <- i + 1
  ate i>500
  //para
  escreval("--------------------")
  escreval("Usando o Para")
  para i de 1 ate 500 passo 1 faca
    se i mod 5 = 0 entao
      escreva(i, "  ")
    fimse
  fimpara
Fimalgoritmo