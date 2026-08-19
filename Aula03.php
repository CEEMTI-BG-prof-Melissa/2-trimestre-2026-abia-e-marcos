<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $preco = 120;
      $quantidade = 3;
      $desconto = 30;
      $parcelas = 2;
      $valorto = $preco * $quantidade;
      $valordes = $valorto - $desconto;
      $valorpar = $valordes / $parcelas;
      $valortaxa = $valordes + 15;
      $valoresto = $valordes % 2;
      
      
    
  
      echo "O valor total da compra:" .$valorto;
      echo "<br> O valor da compra após o desconto:" .$valordes;
      echo "<br> O valor de cada parcela: " .$valorpar;
      echo "<br> O valor da compra caso seja acrescentada uma taxa de R$15,00: " .$valortaxa;
      echo "<br> O resto da divisão: " .$valoresto;
    

    ?>   
  </body>
