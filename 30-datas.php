<?php
// Datas
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');
echo "<hr>";

$date = date('Y-m-d'); // date
$datetime = date('Y-m-d H:i:s'); // datetime
echo $date;
echo "<hr>";
echo $datetime;

echo "<hr>";

// TIME
$time = time();
echo date('d/m/Y', $time);

echo "<hr>";
// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo  date('d/m/y - h:i', $data_pagamento);

echo "<hr>";

// STRTOTIME
$data = '2023-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);