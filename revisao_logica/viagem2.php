<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de gasto na viagem</title>
</head>
<body>
    <h1>Cálculo de gasto na viagem</h1>
    <hr>
    <br><br>
    <form method="post" action="viagem2.php">
       <label>Informe a distância percorrida (em Km)</label>
       <input type="number" name="distancia" required>

       <br>

       <label>Informe o consumo do veículo (em Km/L)</label>
       <input type="number" name="consumo" required>
       
       <br>

       <label>Informe o valor do combustível (em R$)</label>
       <input type="number" step=0.01 name="valor_combustivel" required>

       <br>

       <label>Informe o gasto com pedágios (em R$)</label>
       <input type="number" step=0.01 name="pedagios" required>

       <br><br>

       <input type="submit" value="Calcular">
    </form>

    <hr>

    <h2>Resultados:</h2>
    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $distancia = $_POST["distancia"];
            $consumo = $_POST["consumo"];
            $valor_combustivel = $_POST["valor_combustivel"];
            $pedagios = $_POST["pedagios"];

            $qtd_litros = $distancia / $consumo;

            $total_gasto = $qtd_litros * $valor_combustivel;
            $total_gasto += $pedagios; //é o mesmo que total_gasto = total_gasto + pedagios
        
            //exibição dos resultados
            echo "<p><b>Distância percorrida: </b>" . $distancia . "Km</p>";
            echo "<p><b>Consumo do veículo: </b>" . $consumo . "Km/L</p>";
            echo "<p><b>Valor por litro de combustível: </b> R$" .$valor_combustivel . "</p>";
            echo "<p><b>Quantidade de litros utilizados: </b>" .$qtd_litros . "L</p>";
            echo"<p><b>Gastos com pedagio(s): </b> R$" . $pedagios . "</p>";
            echo "<hr>";
            echo "<p><b>Valor gasto na viagem: </b> R$" . $total_gasto . "</p>";
        }

    ?>
</body>
</html>