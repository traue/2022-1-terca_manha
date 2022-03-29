<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        //array sequencial
        $lista_compras = array("Ovos", "Bananas", "Leite", "Chocolate", "Farinha");
        $lista = ["Frutas", 3, "Arroz", 1123131231231.532323123];

        echo "<pre>";
        var_dump($lista_compras);
        echo "</pre>";

        echo "<hr>";

        echo "<pre>";
        var_dump($lista);
        echo "</pre>";

        echo "<hr>";

        echo "<pre>";
        var_dump($lista[3]);
        echo "</pre>";

        //paramos aqui... falta "array associativo"
    ?>
</body>
</html>