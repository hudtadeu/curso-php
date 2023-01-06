<?php
/* is_array($array) = verificar se uma determinada variável é um array*/
$nomes = array("Rodrigo", "Felipe", "Maria", "José");

if (is_array($nomes)) :
  echo "é um array";
else :
  echo "não é um array";
endif;
echo "<hr>";

/* in_array($valor, $array) = verifica se um determinado valor 
existe em alguma posição do array */
$nomes = array("Rodrigo", "Felipe", "Maria", "José");

if (in_array("Felipe", $nomes)) :
  echo "Existe no array";
else :
  echo "Não existe";
endif;
echo "<hr>";

/* array_Keys($array) = retorna um novo array com as chaves
do array passado como parâmetro */
$nomes = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "José");

$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

/*array-values($array) = retorna um novo array com os valores 
do array passado como parâmetro*/
$nomes = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "José");

$values = array_values($nomes);
print_r($values);
echo "<hr>";

/* array_merge($array1, $array2) = agrega p conteúdo dos arrays */
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Popp100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);
echo "<hr>";

/* array_pop($array) = exclui a última posição do array */
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo "<hr>";

/* array_shift($array) = exclui a primeira posição do array */

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo "<hr>";

/* array_unshif($arr, "valor") = adiociona um ou mais elemento no ínicio do array */
$frutas = array("Uva", "Laranja", "Maça");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

/* array_push($arr, "valor", "valor") = adiociona um ou mais elemento no final do array */
$frutas = array("Uva", "Laranja", "Maça");
print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

/* array_combine($keys, $values) = mescla os dois arrays */
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

/* array_sum() = calcula a soma dos elementos de um array */
$soma = array(5, 5.5, 10, 8);
$total = array_sum($soma);
echo $total;
echo "<hr>";
//echo array_sum($soma); pode utilizar dessas duas formas


/* explode ("/", 28/12/1998) = transforma string em array */
$data = "06/01/2023";
$novaData = explode('/', $data);
print_r($novaData);
echo "<hr>";

$frase = "meu nome não é jhonny";
$array = explode(" ", $frase);
print_r($array);
echo "<hr>";

/* implode ("-", $arr) = transforma array em string */
$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
$string = implode(", ", $nomes);
echo $string;