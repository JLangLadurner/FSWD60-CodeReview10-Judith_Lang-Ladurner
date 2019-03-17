<?php require_once 'actions/db_connect.php'; ?> <!-- db_connection file -->

<!DOCTYPE html>
<html>
<head>
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
<body>   
<div class="container">
    <header>
      <div class="row">
      <div class="col-lg-2">
        <img id ="logo" src="img/Logo_EE3-01.jpg">
      </div>
      <div class="col-lg-8 col-lg-offset-2 data" id="headingdata">
        <h1>Welcome to my big library</h1>
      </div>
    </div>
    </header>
    <div class="row">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.html"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#">Single Book</a></li>
          <li><a href="#">Publisher</a></li>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
    


<div class="manageUser">
  <div class="row">
  <div class="col-sm-1 col-sm-offset_11">  
   <a href="create.php"><button class="btn btn-success" type="button">Add Media</button></a>
    </div>
      </div>
      <div class="row">
        <div class="col-lg-11 col-lg-offset-1">
         <table class="table-bordered" > 
             <thead>
                 <tr>
                     <th>Media ID</th>
                     <th>ISBN Code</th>
                     <th>Title</th>
                     <th>Description</th>
                     <th>Type</th>
                     <th>Publication Date</th>
                     <th>Publisher</th>
                     <th>Author</th>
                     <th>Image</th>
                     <th>Genre</th>
                     <th>Available</th>
                     <th>Action</th>
           </tr>
         </thead>
         <tbody>
          <!-- INNER JOIN with the foreign keys-->
           <?php
           $sql = "SELECT * FROM media 
            INNER JOIN `publisher` ON media.fk_pub_id = publisher.pub_id
            INNER JOIN `author` ON media.fk_author_id = author.author_id
            INNER JOIN `genre` ON media.fk_genre_id = genre.genre_id
           ";

           $result = $connect->query($sql);

        
           if($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {

                
                   echo "<tr>
                       <td>".$row['media_id']."</td>
                       <td>".$row['ISBN']."</td>
                       <td>".$row['titel']."</td>
                       <td> ".$row['description']."</td>
                       <td>".$row['type']."</td>
                        <td>".$row['pub_date']."</td>
                        <td>".$row['pub_name']."</td>
                        <td>".$row['first_name']." ".$row['last_name']."</td>
                        <td><img src='".$row['image']."' alt='image' width='90px' height= '120px' ></td>
                        <td>".$row['genre_descr']."</td>
                        <td>".$row['available']."</td>

                       <td>
                           <a href='update.php?media_id=".$row['media_id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?media_id=".$row['media_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>";
               }
           } else {
               echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>

            
       </tbody>
   </table>
</div>
 </div> 
</div>
</div>



</body>
</html>