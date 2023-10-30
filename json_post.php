<?php
$jsonPost= file_get_contents("https://jsonplaceholder.typicode.com/posts");
echo "<pre>";
//var_dump($jsonPost);
echo "</pre>";

$postData= json_decode($jsonPost,true);
?>
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
        background-color: red;
        margin: 0 auto;
        text-align: center;
        color:aliceblue;
        margin-top: 5px;
        padding: 10px;
        font-weight: 600;
        /* font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; */
        font-family: Georgia, 'Times New Roman', Times, serif

    }
     .card-header{
        background-color: blue;
        color: white;
    }
</style>

  <body>
    <h3>POST INFORMATION REPORT</h3>
    <div class="container py-5">
        <div class="row">

             <?php
            foreach ($postData as $key=> $post) {
                    $title=$post["title"];
                    $body=$post["body"];
                   
                ?>

                    <div class="col-md-6 mb-4">
                    <div class="card h-100">
                    <h5 class="card-header">Post Info</h5>
                    <div class="card-body">
                    <h5 class="card-title">Title Name: <?php echo $title ?></h5>
                    <p class="card-text">Body Name: <?php echo $body ?></p>
                    
                    
                </div>
            </div>
        </div>

    <?php } ?>


            </div>
        </div>

        <script     src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

   
  </body>
</html>