Algoritmo "semnome"

Var
// Se��o de Declara��es das vari�veis
  intI : inteiro
  numeros : vetor[1..15] de inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
  para intI de 1 ate 15 faca
    escreva("Digite um numero ", intI,": ")
    leia(numeros[intI])
  fimpara

  para intI de 1 ate 10 faca
    escreva(numeros[intI])
    se numeros[intI] mod 2 = 0 entao
      escreval(" o n�mero � par")
    senao
      escreval(" o n�mero � impar")
    fimse
  fimpara

Fimalgoritmo