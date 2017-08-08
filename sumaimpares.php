<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Suma de los numeros impares del 1 al 100.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">
      <h2>Algoritmo que imprima la suma de todos los numeros impares del 1 al 100.</h2>
          <?php
          $i=1;
          $suma=0;

          while ($i <= 100) {
            if (($i%2)==1){
              echo "$i &nbsp";
              $suma=$suma+$i;
            }
            $i++;
          }
          echo "<h1>La suma es: $suma</h1>";
          ?>
    </div>



  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
