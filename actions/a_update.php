<?php 

require_once 'db_connect.php';

if($_POST) {
   $isbn = $_POST['ISBN'];
   $titel = $_POST['titel'];
   $desc = $_POST['description'];
   $year = $_POST['pub_date'];
   

   $media_id = $_POST['media_id'];

   $sql = "UPDATE media SET 
   ISBN = '$isbn', 
   titel = '$titel', 
   description = '$desc', 
   pub_date = '$year'
  WHERE media_id = {$media_id}";




   if($connect->query($sql) === TRUE) {
       echo "<p>Successfully Updated</p>";
       echo "<a href='../update.php?media_id=".$media_id."'><button type='button'>Back</button></a>";
       echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
       echo "Error while updating record : ". $connect->error;
   }

   

   $connect->close();

}

?>