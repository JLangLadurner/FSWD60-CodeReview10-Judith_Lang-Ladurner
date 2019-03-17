<?php 

require_once 'db_connect.php';

if($_POST) {
   $media_id = $_POST['media_id'];
   $isbn = $_POST['ISBN'];
   $titel = $_POST['titel'];
   $desc = $_POST['description'];
   $type = $_POST['type'];
   $year = $_POST['pub_date'];
   $fk_pub_id = $_POST['pub_id'];
   $fk_author_id = $_POST['author_id'];
   $available = $_POST['available'];
   $fk_genre_id = $_POST['genre_id'];
   $image = $_POST['image'];

   $sql = "INSERT INTO `media`(`media_id`,`ISBN`, `titel`, `description`, `type`, `pub_date`, `fk_pub_id`, `fk_author_id`, `available`, `fk_genre_id`, `image`) 
   VALUES ('$media_id','$isbn','$titel','$desc','$type','$year','$fk_pub_id','$fk_author_id','$available','$fk_genre_id','$image')";






   if($connect->query($sql) === TRUE) {
    echo 
    '<head>
      <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
       <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
      <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Karla" rel="stylesheet">
      

      <link rel="stylesheet" type="text/css" href="css/style01.css">
      <title>Big Library Database</title>

    </head>
    <body>';   
       echo "<h1 class='text-info text-center'>New Record Successfully Created!!</h1>";
       echo "<div class='text-center container'>";
       echo "<a href='../create.php'><button class 'btn btn-success' type='button'>Back</button></a>";
       echo "<a href='../index.php'><button class='btn btn-info' type='button'>Home</button></a>";
       echo '</div></body>
          </html>';

   } else {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>