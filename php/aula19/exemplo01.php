<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo de html com php</title>
</head>
<body>
   <h1>Vamos começar a rodar um PHP</h1> 
   <?php
     $teste = true;
   ?>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ipsam officiis
        magnam perferendis odio quaerat, mollitia dolorum praesentium unde eius pariatur 
        quae nemo placeat possimus odit eaque vero! In, quaerat.</p>
        <!--colocando o if em conjunto com o html-->
        <?php if ($teste): ?>
          <div>
            <p>Olá, só vou aparecer se o teste for verdadeiro</p>
          </div>
          <?php else: ?>
            <div>
              <p>Olá, só vou aparecer se o teste for falso</p>
            </div>  
            <?php endif; ?>
            <!--colocando o mesmo código acima, porém somente com o uso do php--> 
            <?php
            if ($teste){
              echo " <div>
              <p>Olá, só vou aparecer se o teste for verdadeiro</p>
            </div>";
            } else {
              echo "<div>
              <p>Olá, só vou aparecer se o teste for falso</p>
            </div> ";
            }


?>
</body>
</html>