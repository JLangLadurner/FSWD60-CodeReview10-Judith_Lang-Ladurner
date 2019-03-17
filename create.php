<?php 
require_once 'actions/db_connect.php';
?>

<!-- <!DOCTYPE html> -->
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
   <title>Big Library  |  Add Media</title>

</head>
<body>
  <div class="container">
    
  <div class="row gradient">
      <header>
      <div class="col-lg-1">
        <img id ="logo" src="img/fresh_logo_color.png">
      </div>
      <div class="col-lg-9 col-lg-offset-2 data" id="headingdata">
        <h1>Welcome to my Big Library</h1>
      </div>
    </header>
    </div>
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
          <!-- <li><a href="create.php">Create Media</a></li>
          <li><a href="delete.php">Delete Delete</a></li> -->
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  </div>

<fieldset>
   <legend>Add Media</legend>

   <form action="actions/a_create.php" method="post">
       <table cellspacing="1" cellpadding="1">
        
        <tr>
               <th>Media ID</th>
               <td><input type="text" name="media_id" placeholder="ID" /></td>
           </tr>  
           <tr>
               <th>ISBN code</th>
               <td><input type="text" name="ISBN" placeholder="ISBN" /></td>
           </tr>     
           <tr>
               <th>Title</th>
               <td><input type="text" name="titel" placeholder="Title" /></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text" name="description" placeholder="Description" /></td>
           </tr>
            <tr>
               <th>Type</th>
               <td><select type="text" name="type" placeholder="Please choose" />
               <option selected>Choose...</option>
               <option value="Book">Book</option>
               <option value="CD">CD</option>
               <option value="DVD">DVD</option>
               
               </td>
           </tr>
           <tr>
               <th>Date published</th>
               <td><input type="text" name="pub_date" placeholder="JJJJ-MM-DD" /></td>
           </tr>
           <tr>
               <th>Pusblisher</th>
               <td><select class="custom-select" name="pub_id">
                <option selected>Choose Publisher</option>

                <?php 
                $sql = "
                SELECT * FROM `publisher";

                $result = $connect->query($sql);
                if ($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    print("
                      <option value ='".$row["pub_id"]."'>".$row['pub_name']."</option>");
                  }
                }
                 ?>
               </select>
                 </td>
           </tr>
           <tr>
               <th>Author  Name</th>
               <td><select class="custom-select" name="author_id" placeholder="Author Name">
                <option selected>Choose Author</option>
                <?php
                $sql = "
                SELECT * from author ";
                
                $result = $connect->query($sql);
                if ($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    print("
                      <option value ='".$row["author_id"]."'>".$row['first_name']." ".$row['last_name']."</option>");
                  }
                }
                ?>
              </select>
                </td>
          </tr>
           
           <tr>
               <th>Available</th>
               <td><select type="text" name="available" placeholder="Please choose" />
               <option selected>Choose...</option>
               <option value="yes">yes</option>
               <option value="no">no</option>
               
               </td>
           </tr>
           <tr>
               <th>Genre</th>
               <td><select class="custom-select" name="genre_id" placeholder="Genre">
                <option selected>Choose Genre</option>
           <?php 
                $sql = "
                SELECT * from genre ";
                
                $result = $connect->query($sql);
                if ($result ->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    print("
                      <option value ='".$row["genre_id"]."'>".$row['genre_descr']."</option>");
                  }
                }
                 ?>
               </select>
                 </td>
          </tr>
           <tr>
               <th>Image</th>
               <td><input type="text" name="image" placeholder="please insert picture URL" /></td>
           </tr>
           <tr>
               <td><button class="btn btn-success move" type="submit">Insert Media</button></td>
               <td><a href="index.php"><button class="btn btn-info move" type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>
</div>
    <footer id="myfoot" class="container text-center">
      <img src="img/codefactory-vienna-logo.png" width="150px" height="50px" alt="codefactory">
      <p>CodeReview 10 </p>
      <p>&copy; Judith Lang-Ladurner  </p>
    </footer>

</body>
</html>