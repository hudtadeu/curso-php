<?php
// Funções para Números
// number_format

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";
// round
echo round(3.4);
echo "<hr>";

// ceil arredonda so pra cima
echo round(8.1);
echo "<hr>";

// floor arredonda para baixo
echo floor(8.9);
echo "<hr>";

// rand número aleatorio (sorteio)
echo rand(1, 20);
echo "<hr>";