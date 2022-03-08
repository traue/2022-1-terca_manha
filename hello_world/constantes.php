<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
        //constante, ou seja, não pode ser alterada
        define('DB_URL', 'url_do_banco_de_dados');
        define('DB_USUARIO', 'root');
        define('DB_PASS', 'Senha123');

        echo DB_URL . '<br>';
        echo DB_USUARIO . '<br>';
        echo DB_PASS . '<br>';

        //define('DB_URL', 'localhost'); //não é possível alterar constantes!
    ?>
</body>
</html>