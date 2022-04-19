<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Resultados</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $valor_imc = calculaIMC($peso, $altura);

    function calculaIMC($peso, $altura) {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    //desafio do tio: Criar um método de classificação, 
    //baseado neste link: https://arquivos.sbn.org.br/equacoes/eq5.htm 
    function classificaIMC($imc) {
        $classificacao = "";

        if($imc < 16) {
            $classificacao = "Magreza grau III";
        } elseif($imc >= 16 && $imc <= 16.9) {
            $classificacao = "Magreza grau II";
        } elseif($imc > 16.9 && $imc <= 18.4) {
            $classificacao = "Magreza grau I";
        } elseif($imc > 18.4 && $imc <= 24.9) {
            $classificacao = "Adequado";
        } elseif($imc > 24.9 && $imc <= 29.9) {
            $classificacao = "Pré-obeso";
        } elseif($imc > 29.9 && $imc <= 34.9) {
            $classificacao = "Obesidade grau I";
        } elseif($imc > 34.9 && $imc <= 39.9) {
            $classificacao = "Obesidade grau II";
        } else {
            $classificacao = "Obesidade grau III";
        }

        return $classificacao;
    }

    ?>
    <div class="cabecalho">
        <p>Calculadora IMC - Resultados</p>
        <hr>
    </div>

    <div class="resultados">
        <p><b>Peso informado: </b><?= $peso ?>Kg</p>
        <p><b>Altura informada: </b><?= number_format($altura, 2, ',') ?>m</p>
        <hr>
        <p><b>IMC: </b><?= number_format($valor_imc, 2, ',') ?></p>
        <!-- Alternativa:
        <p><b>IMC: </b><?php printf('%.2f', $valor_imc); ?></p> -->
        <p><b>Classificação: </b> <?= classificaIMC($valor_imc)?></p>
        <br>
        <a href="./">Calcular novamente</a>
    </div>

</body>

</html>