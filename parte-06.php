<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Parte-06</title>
</head>
<body>
    
    <h2>Resultado-Strings</h2>
    
    <?php

    $palavra = $_GET["palavra"];
    echo strlen("$palavra");
    echo ("<br / >");
   
    $frase = $_GET["frase"];
    echo str_word_count("$frase");
    echo ("<br / >");

    $inverter = $_GET["inverter"];
    echo strrev("$inverter");
    echo ("<br / >");
    echo ("<br / >");

    echo ("Dada a frase abaixo: <br / >
    Hoje estou estudando PHP <br / >
    Desejo saber a posição da palavra PHP na frase acima.");

    echo ("<br / >");

    $texto = "Estou estudando PHP";
    $pesquisa = strpos($texto, "PHP");
    echo ("<br / >");
    echo "Está na posição ".$pesquisa. "<br>";
    
    echo ("<br / >");

    $texto2 = "Olá, mundo";
    $novo_texto = str_replace("mundo", "leitor", $texto2);
    echo $novo_texto;
  
    ?>
    
    <h2>Resultado-instruções condicionais</h2>
   
    <?php
      $hora = $_GET["hora"];

      if($hora < "10:00"){
        echo "Tenha uma boa manhã!";
      }elseif($hora < "20:00"){
        echo "Tenha um bom dia!";
      }else{
          echo "Tenha uma boa noite!";
      }

      echo ("<br / >");
   
    ?>

    <h2>Resultado-Loop</h2>
    
    <?php
    $valor = $_GET["valor"];

    // $x = 15;

     while ($valor <= 150) {
        echo "$valor";
        echo ("<br / >");
        $valor+=15;
     }
    ?>

    <br>
    <a href="index.html">Voltar</a>

    
</body>
</html>