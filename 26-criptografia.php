<?php
$senha = "123456";

$novasenha = base64_encode($senha); // função para codificar
echo "base64: " . $novasenha . "<br>";
echo "Sua senha é:" . base64_decode($novasenha); //função para decodificar

echo "<hr>";

// so consegue cripitografar - md5/sha1
echo "Md5: " . md5($senha) . "<br>";
echo "Sha1: " . sha1($senha);

echo "<hr>";

// senhas seguras com password hash
$senha = "123456";
$senha_db = '$2y$10$LHjuWTqOMsnaA0Q9L2SIce19az.36aUG2W5gpre/2dmXyia1Z0fNK';

/* $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura. "<br>"; */

if (password_verify($senha, $senha_db)) :
  echo "Senha válida";
else :
  echo "Senha inválida";
endif;
