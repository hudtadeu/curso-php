<?php
// Operadores lógicos
// Nos permitem fazer comparações entre expressões
// e ( && - end) retorna verdadeiro quando as duas expressões são verdadeiras.

$idade = 25;
$nome = "Rodrigo";

if (($idade == 25) && ($nome == "Rodrigo")) :
  echo "É verdadeiro";
else :
  echo "É falso";
endif;
echo "<hr>";
// ou (|| - or) retorna verdadeiro se pelo menos uma expressão for verdadeira.
// falso so se a duas forem falsas
$idade = 25;
$nome = "Rodrigo";

if (($idade == 30) || ($nome == "Rodrigo")) :
  echo "É verdadeiro";
else :
  echo "É falso";
endif;
echo "<hr>";
// ou exclusivo (xor) é um ou outro
// uma das expressões verdadeiras
$idade = 25;
$nome = "Rodrigo";

if (($idade == 25) xor ($nome == "Carlos")) :
  echo "É verdadeiro";
else :
  echo "É falso";
endif;
echo "<hr>";
// negação (!)
$idade = 25;
$nome = "Rodrigo";

if (!($idade == 25) and ($nome == "Rodrigo")) :
  echo "É verdadeiro";
else :
  echo "É falso";
endif;
echo "<hr>";
