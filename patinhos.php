<?php

    $_numero_de_patos = 4;
    
    if(is_int($_numero_de_patos)) {
        if($_numero_de_patos > 0 && $_numero_de_patos < 10) {
            for($i = $_numero_de_patos; $i > 0; $i--) {
                echo $i != 1 ? "$i patinhos foram passear <br>" : "$i patinho foi passear <br>";                
                echo "Alem das montanhas<br>";
                echo "Para brincar<br>";
                echo "A mamae gritou: Quá, quá, quá, quá<br>";

                switch($i) {
                    case $i > 2:
                        echo "Mas só " . ($i - 1) . " patinhos voltaram de lá.<br>";
                    break;
                    case 2:
                        echo "Mas só " . ($i - 1) .  " patinho voltou de lá.<br>";
                    break;
                    
                    case 1:
                        echo "Mas nehum patinho voltou de lá.<br>";
                    break;
                }

            }

            echo "A mamãe patinha
            Foi procurar
            Além das montanhas
            Na beira do mar
            
            A mamãe gritou
            Quá, quá, quá, quá!
            E os $_numero_de_patos patinhos
            Voltaram de lá.";

        } else {
            echo "Valor deve ser maior que 0 e menor que 10";
        }

    } else {
        echo "Somente valores numéricos";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
</body>
</html>