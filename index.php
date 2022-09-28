<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO PHP</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php'; //chama a classe 

        // $c1 = new Caneta; // instancia a classe
        // $c1->cor = "azul"; // atribui valores a classe 
        // $c1->ponta = 0.5;
        // $c1->tampada = false;
        // $c1->tampar(); //chama Método
        // $c1->destampar();
        // $c1->rabiscar();

        // var_dump($c1);

        // // Caneta 2 
        // $c2 = new Caneta;
        // $c2->cor = "verde";
        // $c2->carga = 50 ;
        // $c2->tampar();

        // var_dump($c2);

        
        $c1 = new Caneta;
        $c1->modelo = "Bic cristal";
        $c1->cor = "Azul"; 
        // $c1->ponta = 0.8;
        // $c1->carga = 99;
        // $c1->tampada = true; //atributo protegido, não consigo alterar diretamente

        
        $c1->rabiscar();
        $c1->tampar(); // pela função que dentro dela tem o metodo tampada, eu consigo ter acesso ao atributo protegido
        
        var_dump($c1);
        print_r($c1);

    ?>
    </pre>

</body>
</html>