<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Banco</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ContaBanco.php'; 

        $p1 = new ContaBanco;  // Jubileu
        $p2 = new ContaBanco;  // Creuza

        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        
        $p2->abrirConta("CP");
        $p1->setDono("Creuza");

        print_r($p1);
        print_r($p2);

    ?>
    </pre>
</body>
</html>