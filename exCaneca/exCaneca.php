<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 canecas diferentes</title>
</head>
<body>

    <?php 
        require_once 'Caneca.php';
    
        $obj = new Caneca;
        $obj->cor = "branco";
        $obj->liquido = "café";
        $obj->alca = false;
        $obj->volume = 30;

        $obj->pegarCaneca();
        $obj->temLiquido();

        var_dump($obj);

        //objeto 2
        $obj2 = new Caneca;
        $obj2->cor = "cinza";
        $obj2->liquido = "";
        $obj2->alca = false;
        $obj2->volume = 0;

        $obj2->temLiquido();

        var_dump($obj2);
        
    ?>

</body>
</html>