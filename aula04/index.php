<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Aula 04</title>
</head>

<body>
  <pre>
  <?php
  require_once 'Caneta.php';
  $c1 = new Caneta("BIC", "Azul", 0.5);
  $c2 = new Caneta("kkk", "Verde", 1.0);
  //$c1->setModelo("BIC");
  //$c1->modelo = "BIC";
  //$c1->setPonta(0.5); // so posso mexer na ponta via metodo, pois é privado
  //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
  print_r($c1);
  print_r($c2);

  ?>
  </pre>
</body>

</html>