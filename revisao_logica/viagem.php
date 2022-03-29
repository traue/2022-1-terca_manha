<?php
    //problema da viagem de carro: 
    //Objetivo: descobrir o gasto da viagem
    
    //é dado:
    // - Distância (em Km)
    // - Consumo do veículo (em Km/L)
    // - Valor do Combustível (por litro)
    // - Gasto com pedágios (em R$)

    $distancia = 120;
    $consumo = 12;
    $valor_combustivel = 5.5;
    $pedagios = 18.8;

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
?>