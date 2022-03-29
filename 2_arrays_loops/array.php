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
        $lista = ["Frutas", 3, "Arroz", 1123131231231.532323123, true];
    
        echo "<pre>";
        var_dump($lista_compras);
        echo "</pre>";

        echo "<hr>";

        echo "<pre>";
        var_dump($lista);
        echo "</pre>";

        echo "<hr>";

        echo "<pre>";
        var_dump($lista[2]);
        echo "</pre>";

        echo "<hr>";

        //"array associativo"
        $lista['x'] = 'Uninove';
        
        echo "<pre>";
        var_dump($lista);
        echo "</pre>";

        echo "<hr>";
        
        $dados_aluno["nome"] = "Thiago G. Traue";
        $dados_aluno["nota"] = 9;
        $dados_aluno["email"] = "thiago.traue@uni9.pro.br";
        $dados_aluno["aprovado"] = true;

        echo "<pre>";
        var_dump($dados_aluno);
        echo "</pre>";
    ?>
</body>
</html>