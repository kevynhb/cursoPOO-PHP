<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO PHP</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ClasseCaneta2.php'; //chama a classe 

        // $c1 = new Caneta2; // instancia a classe
        // $c1->setModelo("BIC");
        // $c1->setPonta(0.5);

        //usando método construtor para passar os parametros diretamente
        $c1 = new Caneta2("BIC", "Azul", 0.5);

        print_r($c1);
        
    ?>
    </pre>
</body>
</html>