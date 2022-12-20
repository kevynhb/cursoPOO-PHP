<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php 
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        // $c->setVolume(80); // Não consegue, pois é para realizar essa tarefa somente pela interface
        $c->maisVolume();
        $c->abrirMenu();
    ?>
    </pre>
</body>
</html>