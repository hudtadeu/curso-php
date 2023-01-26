<?php
$senha = "123456";

$novasenha = base64_encode($senha); // função para codificar
echo "base64: " . $novasenha . "<br>";
echo "Sua senha é:" . base64_decode($novasenha); //função para decodificar

echo "<hr>";

// so consegue cripitografar - md5/sha1
echo "Md5: " . md5($senha). "<br>";
echo "Sha1: " . sha1($senha);
