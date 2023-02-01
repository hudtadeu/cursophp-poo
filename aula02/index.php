<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Aula 02</title>
</head>

<body>
  <?php
  require_once 'Caneta.php';
  $c1 = new Caneta;
  $c1->cor = "Azul";
  $c1->ponta = 0.5;
  $c1->tampar();
  print_r($c1);

  echo "<hr>";

  $c2 = new Caneta;
  $c2->cor = "Verde";
  $c2->carga = 50;
  $c2->tampar();
  print_r($c2);

  ?>
</body>

</html>