<?php
// ESCALARES 

// String
$nome = "Olá mundo"; /* entre aspas */
var_dump($nome);
if(is_string($nome)):
  echo "É uma string";
else:
  echo "Não é uma string";
endif;

echo "<hr>";

// int
$idade = 24; /* numeros inteiros */
var_dump($idade);
if(is_int($idade)):
  echo "É um inteiro";
else:
  echo "Não é um inteiro";
endif;
echo "<hr>";

// float
$altura = 1.77; /* numeros reais */
var_dump($altura);
if(is_float($altura)):
  echo "É um float";
else:
  echo "Não é um float";
endif;
echo "<hr>";

//boolean
$admin = false; /* true ou false */
var_dump($admin);
if(is_bool($admin)):
  echo "É um boolean";
else:
  echo "Não é um boolean";
endif;
echo "<hr>";

// COMPOSTOS 

// array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);

if(is_array($carros)):
  echo "É um array";
else:
  echo "Não é um array";
endif;
echo "<hr>";

// object
class Cliente {
  public $nome;
  public function atribuirNome($nome) {
    $this->$nome = $nome;
  }
}

$cliente = new Cliente();
$cliente->atribuirNome("Hudson"); 
var_dump($cliente);

if(is_object($cliente)):
  echo "É um objeto";
else:
  echo "Não é um objeto";
endif;
echo "<hr>";

// ESPECIAIS

// NULL
$cidade = NULL;
var_dump($cidade);

// Resource