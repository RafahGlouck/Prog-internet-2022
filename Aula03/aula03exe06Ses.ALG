Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis
  opcao : inteiro
  pesoNaTerra : real
  pesoNoPlaneta : real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
  escreval("Digite o peso na terra:")
  leia(pesoNaTerra)
  escreval("Op��es de planetas")
  escreval("1 - Merc�rio")
  escreval("2 - V�nus")
  escreval("3 - Marte")
  escreval("4 - J�piter")
  escreval("5 - Saturno")
  escreval("6 - Urano")
  escreval("Digite a op��o")
  leia(opcao)
  se opcao = 1 entao
    pesoNoPlaneta := pesoNaTerra / 10 * 0.37
  senao
    se opcao = 2 entao
       pesoNoPlaneta := pesoNaTerra / 10 * 0.88
    senao
      se opcao = 3 entao
        pesoNoPlaneta := pesoNaTerra / 10 * 0.38
      senao
        se opcao = 4 entao
           pesoNoPlaneta := pesoNaTerra / 10 * 1.15
        senao
          se opcao = 5 entao
            pesoNoPlaneta := pesoNaTerra / 10 * 1.15
          senao
            se opcao = 6 entao
              pesoNoPlaneta := pesoNaTerra / 10 * 1.17
            senao
              pesoNoPlaneta := pesoNaTerra
              escreval("Planeta n�o est� na rela��o!")
            fimse
          fimse
        fimse
      fimse
    fimse
  fimse
  escreval("O peso no planeta � ",pesoNoPlaneta)

Fimalgoritmo