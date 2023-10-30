<?php
$jsonData= file_get_contents("https://jsonplaceholder.typicode.com/users" );
// echo "<pre>";
// var_dump($jsonData);
// echo "</pre>";

// $myData=json_decode($jsonData,true);
// echo "<pre>";
// var_dump($myData);
// echo "</pre>";

$userData=json_decode($jsonData,true);
foreach ($userData as $user) {
    // $name=$user["name"];
    // echo "<pre>";
    // echo $name;
    // echo "</pre>";
    echo "<pre>";
    var_dump ($user);
    echo "</pre>"; 
    // exit();
}
?>