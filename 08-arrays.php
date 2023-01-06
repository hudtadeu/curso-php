<?php
// ARRAYS numéricos
$carros = array(1 => "BMW", 2 => "Veloster", 3 => "Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

// Count
$totalClientes = count($clientes); /* contador */
echo $totalClientes;
echo "<hr>";

// Foreach
foreach ($carros as $valor) { /* para pecorrer o array */
  echo $valor . "<br>";
}
echo "<hr>";

//Arrays associativos
$pessoa = array("nome" => "Hudson", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabira";

foreach ($pessoa as $indice => $valor) {
  echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array(
  "cariocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro" => "botafogo"),
  "paulistas" => array("campeao" => "palmeiras", "vice" => "santos", "terceiro" => "corinthians"),
  "bahianos" => array("campeao" => "bahia", "vice" => "vitoria", "terceiro" => "itabuna")
);
//echo $times["paulistas"][1];
echo "<br>";

foreach ($times["cariocas"] as $indice => $valor) {
  echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

foreach ($times["paulistas"] as $indice => $valor) {
  echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

foreach ($times["bahianos"] as $indice => $valor) {
  echo $indice . ":" . $valor . "<br>";
}
