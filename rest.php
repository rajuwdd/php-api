<?php
$jesonData= file_get_contents("https://restcountries.com/v3.1/all");
$countries= json_decode($jesonData,true);

echo "<pre>";
var_dump($countries);
 echo "</pre>";




?>