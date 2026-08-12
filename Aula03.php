<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <? php
    $preco = 120;
    $quantidade = 3;
    $desconto = 30;
    $parcelas = 2;
    $valorto = $preco * $quantidade;
    $valordes = $valorto - $desconto;
    $valorpar = $valordes / parcelas;
    $valortaxa = valordes + 15;
    
  

    echo "O valor total da compra:" .($preco * quantidade);
    echo "<br> O valor da compra após o desconto:" .(
    

    ?>   
  </body>
