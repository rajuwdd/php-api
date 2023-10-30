<?php
$jeson= file_get_contents('https://restcountries.com/v3.1/all');
// print_r($jeson);
$code= json_decode($jeson,true);
echo "<pre>";
print_r($code);
echo "</pre>";
