<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Funções Aritmeticas</title>
    <style>
        h2 {
            font: 15pt Arial, Helvetica, sans-serif;
            color:blue;
            font-weight: bold;
            
        }
    </style>
</head>
<body>
    <div>
        <?php
           

            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

            echo "<h2>Valores recebidos: $v1 e $v2 </h2>";
            echo "O valor absoluto de $v2 e ". abs($v2);
            echo "<br>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
            echo "<br>A raiz quadrada de $v1 e ". sqrt($v1);
        ?>
    </div>
    
</body>
</html>