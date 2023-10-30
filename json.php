
<?php
// $myArr = array("John", "Mary", "Peter", "Sally");
// echo '<pre>';

// print_r($myArr) . "<br>";
// echo '</pre>';
// echo "<br>";
// $my = json_encode($myArr);
// echo "<br>";
// echo $my;
// echo "<br>";

?>

<?php
// $jsonData= file_get_contents("https://jsonplaceholder.typicode.com/users" );
// echo "<pre>";
// var_dump($jsonData);
// echo "</pre>";
?>
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
// foreach ($userData as $key=> $user) {
//     $name=$user["name"];
//     $email=$user["email"];
//     $phone=$user["phone"];
//     $website=$user["website"];
    // echo $name;
    // echo "<pre>";
    // echo "</pre>";
// }
 ?>
<!-- ============ bootstar started ==============-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Json Data!</title>          
  </head>
<style>
    h3{
        background-color: green;
        margin: 0 auto;
        text-align: center;
        color:aliceblue;
        margin-top: 5px;
        padding: 10px;
        font-weight: 500;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

    }
</style>

  <body>
    <h3>USER INFORMATION REPORT</h3>
    <div class="container py-5">
        <div class="row">

             <?php
            foreach ($userData as $key=> $user) {
                    $name=$user["name"];
                    $email=$user["email"];
                    $phone=$user["phone"];
                    $website=$user["website"];
                    $address=$user["address"]["zipcode"];
                ?>

                    <div class="col-md-4">
                    <div class="card my-2">
                    <h5 class="card-header">User Info</h5>
                    <div class="card-body">
                    <h5 class="card-title">Name: <?php echo $name ?></h5>
                    <p class="card-text">Phone: <?php echo $phone ?></p>
                    <p class="card-text">Email: <?php echo $email ?></p>
                    <p class="card-text">website: <?php echo $website ?></p>
                    <p class="card-text">address: <?php echo $address ?></p>
                    
                </div>
            </div>
        </div>

    <?php } ?>


            </div>
        </div>
    


    
    
    
    
    <script     src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

   
  </body>
</html>