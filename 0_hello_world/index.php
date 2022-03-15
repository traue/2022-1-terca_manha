    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World</title>
    </head>
    <body>
        <!-- isso é um comentário  -->
        <h1>Minha primeira página PHP</h1>
        <hr>
        <br>

        <?php //isso é um blodo de código PHP...
            //isso é um comentário dentro do PHP
            /**
             * Isso é um 
             * bloco que comentários
             */

            //isso é uma variável textual (String):
            $nome = 'Thiago G. Traue';

            //essa é uma variável de valor inteiro:
            $idade = 34;

            //variável de ponto flutuante (real)
            $altura = 1.83;

            //variável booleana (verdadeira ou falsa)
            $fumante = true;

            //outra variável textual
            $time = "Bragantino"; //você pode usar aspas simples ou duplas
        ?>

        <h2>Dados do usuáro:</h2>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Time que torce: <?= $time ?></p>
        <p>Altura: <?= $altura ?></p>

        <?php
            // if($fumante) { //SE... verdadeiro (condição booleana), entre no bloco
            //     echo('<p>Fuma? Sim!</p>');
            // } else {
            //     echo('<p>Fuma? Não!</p>');
            // }
        ?>

        <!-- é o mesmo que....: -->
        <p>Fuma? <?= $fumante ? 'Sim' : 'Não' ?> </p>

        
    </body>
    </html>