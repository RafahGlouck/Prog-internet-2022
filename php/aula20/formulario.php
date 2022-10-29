<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <form action="#">
    <label for="codigo">Digite o código:</label>
    <input type="number" name="codigo" id="codigo">
    <input type="submit" value="Enviar">
    </form>
    <?php 
    if ($_REQUEST){
        echo "<p>Recebi os dados</p>";
        $base=2; $soma=0;
        for($i=strlen($_REQUEST["codigo"])-1;$i>=0;$i--){
            $soma+= substr($_REQUEST["codigo"],$i,1) *$base;
            $base++;
        }
        echo "Soma = $soma";
    }

    ?>
</body>
</html>