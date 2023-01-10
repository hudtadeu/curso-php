<?php
// Funções para Strings 

// strtoupper
$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

// strtolower
$nome = "RODRIGO OLIVEIRA";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

// substr
$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);
echo "<hr>";

// str_pad
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*");
echo $novoObjeto;
echo "<hr>";

// str_repeat
$string = str_repeat("Sucesso!", 5);
echo $string;
echo "<hr>";

// strlen
$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<hr>";

// str_replace
$texto = "A seleção Argentina será campeã da copa do mundo de 2022.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";
// strpos
echo strpos($texto, "copa");
