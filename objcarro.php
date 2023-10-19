<?php

    // Incluindo a classe que criada na pasta "Classes"
    include("classe.php");

    // Instanciando novo objeto
    $carro0 = new Carro();

    // Atribuindo valores aos atributos
    $carro0->ano = "2012";
    $carro0->modelo = "C4 VTR";
    $carro0->cor = "Preto";
    $carro0->fabricante = "Citroen";
    $carro0->status = "Disponível";

    // Instanciando novo objeto
    $carro1 = new Carro();

    $carro1->ano = "2014 / 2015";
    $carro1->modelo = "Corcel 2";
    $carro1->cor = "Amarelo";
    $carro1->fabricante = "Ford";
    $carro1->status = "Indisponível";

    // Instanciando mais quatro objetos de carro
    $carro2 = new Carro();
    $carro3 = new Carro();
    $carro4 = new Carro();
    $carro5 = new Carro();

    $carro2->ano = "2020";
    $carro2->modelo = "Golf GTI";
    $carro2->cor = "Azul";
    $carro2->fabricante = "Volkswagen";
    $carro2->status = "Disponível";

    $carro3->ano = "2019";
    $carro3->modelo = "Mustang GT";
    $carro3->cor = "Vermelho";
    $carro3->fabricante = "Ford";
    $carro3->status = "Disponível";

    $carro4->ano = "2018";
    $carro4->modelo = "Civic Type R";
    $carro4->cor = "Branco";
    $carro4->fabricante = "Honda";
    $carro4->status = "Indisponível";

    $carro5->ano = "2021";
    $carro5->modelo = "Tesla Model 3";
    $carro5->cor = "Prata";
    $carro5->fabricante = "Tesla";
    $carro5->status = "Disponível";

    // Imprimindo na tela do usuário os valores dos objetos de carro
    echo "<p>Carro " . $carro0->status . ":</p>";

    echo "<p>Fabricante do carro: " . $carro0->fabricante . "<br>
          Modelo: " . $carro0->modelo . "<br>
          de Cor: " . $carro0->cor . "<br>
          Ano: " . $carro0->ano . "</p><hr>";

    // Imprimindo na tela do usuário os valores dos objetos de carro
    echo "<p>Carro " . $carro1->status . ":</p>";

    echo "<p>Fabricante do carro: " . $carro1->fabricante . "<br>
          Modelo: " . $carro1->modelo . "<br>
          de Cor: " . $carro1->cor . "<br>
          Ano: " . $carro1->ano . "</p><hr>";

    // Imprimindo os valores dos outros quatro carros
    echo "<p>Carro " . $carro2->status . ":</p>";
    echo "<p>Fabricante do carro: " . $carro2->fabricante . "<br>
          Modelo: " . $carro2->modelo . "<br>
          de Cor: " . $carro2->cor . "<br>
          Ano: " . $carro2->ano . "</p><hr>";

    echo "<p>Carro " . $carro3->status . ":</p>";
    echo "<p>Fabricante do carro: " . $carro3->fabricante . "<br>
          Modelo: " . $carro3->modelo . "<br>
          de Cor: " . $carro3->cor . "<br>
          Ano: " . $carro3->ano . "</p><hr>";

    echo "<p>Carro " . $carro4->status . ":</p>";
    echo "<p>Fabricante do carro: " . $carro4->fabricante . "<br>
          Modelo: " . $carro4->modelo . "<br>
          de Cor: " . $carro4->cor . "<br>
          Ano: " . $carro4->ano . "</p><hr>";

    echo "<p>Carro " . $carro5->status . ":</p>";
    echo "<p>Fabricante do carro: " . $carro5->fabricante . "<br>
          Modelo: " . $carro5->modelo . "<br>
          de Cor: " . $carro5->cor . "<br>
          Ano: " . $carro5->ano . "</p><hr>";
?>
