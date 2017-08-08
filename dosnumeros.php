<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dos numeros.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <div class="container col-12 col-md-8 col-9">
      <h2>Algoritmo que solicite dos numeros y muestre todos los numeros que van desde el primero hasta el segundo. Se debe controlar que los valores sean correctos.</h2>
      <?php
      $i=25;
      $i1=30;
      $cont=0;

      while ($i <= 30) {
        {
          echo "<h3>$i &nbsp</h3>";
          $i++;
        }
        $cont++;
      }
      echo "<h1>Del primero numero al segundo hay: $cont numeros</h1>";
      ?>
</div>
  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
