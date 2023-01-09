<?php
// Operadores de comparação
// == igual
if (10 == 10) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// != nao igual
if (10 != 11) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// === identico
if (10 === "10") :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// !== nao identico
if (10 !== 11) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// <> diferente
if (10 <> 11) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// < menor
if (10 < 30) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// >
if (10 > 1) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// <=
if (10 <= 10) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// >=
if (10 >= 30) :
  echo "Positivo";
else :
  echo "Negativo";
endif;
echo "<hr>";
// <=> -1, 0, 1 retorna lado menor
var_dump(20 <=> 2);

