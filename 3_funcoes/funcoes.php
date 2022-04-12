<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <?php
        /*Existem essencialmente 4 tipos de funções:
            - sem entrada de parâmetros e sem retorno
            - com entrada de parâmetros e sem retorno
            - sem entrada de parâmetros e com retorno
            - com entrada de parâmetros e com retorno
            */

        //não entra nada e não retorna nada
        function dizOla()
        {
            echo '<b>Olá mundo!</b>';
        }

        //entra uma variá e não retorna nada 
        function falaNome($nome)
        {
            echo 'Olá ' . $nome . ' seja bem-vind@!';
        }

        //sem entrada e com retorno
        function valorPI()
        {
            return 3.141512;
        }

        //com entrada e com retorno
        function calculaNascimento($idade)
        {
            return 2022 - $idade;
        }

    ?>

    <?= dizOla() ?>
    <br>
    <?= falaNome(324) ?>;
    <br>
    <?php
        $x = valorPI();
        $x = $x * 3;
        echo $x;
    ?>

    <br>

    <?php
        $idade = 35;
        $ano_nascimento = calculaNascimento($idade);
        echo "Ah! legal, você nasceu em " . $ano_nascimento . "!";
    ?>
    
</body>

</html>