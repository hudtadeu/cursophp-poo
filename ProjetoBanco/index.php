<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Exemplo Prático</title>
</head>

<body>
  <pre>
  <?php
    require_once 'ContaBanco.php';
    $p1 = new ContaBanco(); //Jubileu
    $p2 = new ContaBanco(); // Creuza
    $p1->abrirConta("CC"); 
    $p1->setDono("Jubileu");
    $p2->abrirConta("CP"); 
    $p2->setDono("Creuza"); 

    $p1->depositar(300);
    $p2->depositar(500); 

    $p2->sacar(100);

    $p1->pagarMensal(338);
    $p2->pagarMensal(630);

    $p1->sacar();
    $p2->sacar();

    $p1->fecharConta();
    $p2->fecharConta();

    print_r($p1);
    print_r($p2);
  ?>
  </pre>
</body>

</html>