<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO PHP</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php'; //chama a classe 

        $c1 = new Caneta; // instancia a classe
        $c1->cor = "azul"; // atribui valores a classe 
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->tampar(); //chama Método
        $c1->destampar();
        $c1->rabiscar();

        var_dump($c1);

        // Caneta 2 
        $c2 = new Caneta;
        $c2->cor = "verde";
        $c2->carga = 50 ;
        $c2->tampar();

        var_dump($c2);

    ?>
</body>
</html>