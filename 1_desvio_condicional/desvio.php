<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvio Condicional</title>
</head>
<body>
    <?php
        /*
            O desvio condicional nada mais é do que 
            a alteração em runtime (tempo de execução)
            do fluxo normal de execução de nosso código,
            baseado em uma condição "booleana" (verdaeira
            ou falsa)...
            Ou seja...
            SE (<CONDIÇÃO BOOLEANA>) {
                SE DER VERDADEIRA A CONDIÇÃO
                A EXECUÇÃO ENTRA NESTE BLOCO
            } SENÃO {
                SE DER FALSO O RESULTADO, ENTÃO
                ESTE BLOCO SERÁ EXECUTADO
            }

            No PHP, fica assim...:

            if(<condição>) {
                //true...
            } else {
                //false...
            }
            

            Dentro da condição booleana, o PHP suporta
            operações lógicas... as principais são:

            ==   -> Comparação entre valores. Ex: 2 == 2 -> Verdadeiro
            !=   -> Diferente. Ex: 2 != 5 -> Verdadeiro
            < ou >    -> menor ou maior. Ex: 2 > 5  -> Falso
            ===     -> Verifica se são iguais E do mesmo TIPO. Ex: "2" === 2  -> Falso
            !==     -> Verifica se são difernetes e de TIPOS diferentes
            ... vamos praticar...  
        */

        $x = "34"; //x é uma variável do tipo "string"
        $y = 34;
        $fumante = false;


        if($x === $y) {
            echo "X é igual a Y!";
        } else {
            echo "X é diferente de Y!";
        }

        echo "<br>";

        if($fumante) {
            echo "É fumante...";
        } else {
            echo "Não fuma...!";
        }

    ?>

</body>
</html>