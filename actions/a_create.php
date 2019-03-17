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
       echo "<p>New Record Successfully Created</p>";
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
       echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>