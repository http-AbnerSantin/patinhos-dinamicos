<?php

    $_numero_de_patos = 3;
    
    if(is_int($_numero_de_patos)) {
        if($_numero_de_patos > 0 && $_numero_de_patos < 10) {
            for($i = $_numero_de_patos; $i > 0; $i--) {
                if( $i == 1) {
                    echo "$i patinho
                    Foi passear
                    Além das montanhas
                    Para brincar
                    
                    A mamãe gritou
                    Quá, quá, quá, quá
                    Mas nenhum patinho
                    Voltou de lá <br>";
                } else if ($i == 2) {
                    $menos_um = $i - 1; 
                    echo "$i patinhos
                    Foram passear
                    Além das montanhas
                    Para brincar
                    
                    A mamãe gritou
                    Quá, quá, quá, quá
                    Mas só $menos_um patinho
                    Voltou de lá<br>";           
                } else {
                    $menos_um = $i - 1; 
                    echo "$i patinhos Foram passear Além das montanhas Para brincar
                    
                    A mamãe gritou
                    Quá, quá, quá, quá
                    Mas só $menos_um patinhos
                    Voltaram de lá<br>";
                }
            }

            echo "A mamãe patinha
            Foi procurar
            Além das montanhas
            Na beira do mar
            
            A mamãe gritou
            Quá, quá, quá, quá!
            E os $_numero_de_patos patinhos
            Voltaram de lá";

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