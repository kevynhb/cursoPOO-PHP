<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Principal</title>
</head>
<body>
    <h2>Herança</h2>
    <pre>
    <?php
    // The principal programme
    require_once 'Aluno.php';
    require_once 'Bolsista.php';

    $a1 = new Aluno();
    $a1->setNome("Alex");
    $a1->setIdade("17");
    $a1->setSexo("M");
    $a1->setCurso("Matemática");
    $a1->setMatricula(1010);
    $a1->pagarMensalidade();
    print_r($a1);

    $b1 = new Bolsista();
    $b1->setMatricula(1112);
    $b1->setNome("Junior");
    $b1->setBolsa(12.5);
    $b1->setCurso("Computação");
    $b1->setIdade(45);
    $b1->setSexo("M");
    $b1->pagarMensalidade();
    print_r($b1);

    ?>
</body>
</html>