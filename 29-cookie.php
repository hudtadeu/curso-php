<?php
// COOKIE
setcookie('user', 'Hudson Tadeu', time() + 3600);
setcookie('email', 'hudsontadeu@hotmal.com', time() + 3600);
setcookie('ultima_pesquisa', 'tenis adidas', time() + 3600);
// remover cookie so colocar valor negativo -
echo $_COOKIE['ultima_pesquisa'];