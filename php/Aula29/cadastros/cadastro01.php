 <!--formulário dos clientes-->
<?php
  require_once(__DIR__ . "/../common/cabecalho.php");
  ?>
  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro
    </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
    <header>
        <h2>Cadastro de Cliente</h2>
      </header>
    <form class="row g-3">
        <div class="row g-3">
        <!--Campo de endereço-->
        <div class="col-6">
          <label for="inputEndereço" class="form-label">Endereço</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-house-fill"></i></span>
            <input type="text" class="form-control" placeholder="Endereço" aria-label="Endereço" aria-describedby="basic-addon1" placeholder="Rua: --- Bairro: --- Número: ---">
          </div>
        </div>
        <!--Campo de complemento-->
        <div class="col-6">
          <label for="inputComplemento" class="form-label">Complemento</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2"><i class="bi bi-building"></i></span>
            <input type="text" class="form-control" placeholder="Complemento" aria-label="Complemento" aria-describedby="basic-addon2">
          </div>
        
        </div>
        <!--Campo de cidade-->
        <div class="col-md-6">
          <label for="inputCidade" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCidade">
        </div>
        <!--Campo de estado-->
        <div class="col-md-4">
          <label for="inputEstado" class="form-label">UF</label>
          <select id="inputEstado" class="form-select">
            <option selected>Selecionar..</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputcep" class="form-label">Cep</label>
          <input type="number" class="form-control" id="inputZip">
        </div>
        <!-- Campo de telefone -->
        <div class="col-md-4">
            <label for="inputTelefone" class="form-label">Telefone</label>
            <input type="tel" form-control id="inputTelefone" placeholder="+55(10)123456789">
          </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
             Checar
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
  <?php
  //Aqui colocarei o corpo se precisar
  require_once(__DIR__ . "/../common/rodape.php");
 