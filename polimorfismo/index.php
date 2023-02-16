<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo <?php echo "PHP \u{1F418}" ?></title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Canguru.php';
    require_once 'Cachorro.php';

    $m = new Mamifero();
    $m->setPeso(5,5);
    $m->setIdade(12);
    $m->setMembros(4);
    $m->setCorPelo("Marron");
    $m->alimentar();
    $m->emitirSom();
    $m->locomover();
    print_r($m);

    $r = new Reptil();
    $r->setCorEscama("verde escuro");
    $r->locomover();
    $r->emitirSom();
    $r->alimentar();
    print_r($r);
    
    $c = new Canguru();
    $c->locomover(); // Magia do Polimorfismo, chamando o mesmo metodo, tendo resultados diferentes
    $c->usarBolsa();

    $dog = new Cachorro();
    $dog->emitirSom();
    print_r($dog);
    ?>
</body>
</html>