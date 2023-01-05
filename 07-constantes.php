<?php
// Constantes
define("NOME", "José Carlos"); /* identificador letra maiuscula */
define ("IDADE", 24);
define ("ALTURA", 1.89);
define ("CASADO", true);

define ("TIMES", ['cruzeiro', 'vasco', 'flamengo']);

echo 'Meu nome é '.NOME.', minha idade é '.IDADE.'e minha altura é '.ALTURA.'.';
echo "<hr>";
echo TIMES[0];
echo "<hr>";

function exibeNome() {  /* constantes são globais */
  echo NOME;
}

exibeNome();