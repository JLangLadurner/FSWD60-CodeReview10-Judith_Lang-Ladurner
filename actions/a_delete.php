<?php 

require_once 'db_connect.php';

if($_POST) {
   $media_id = $_POST['id'];

   $sql = "DELETE FROM media WHERE media_id = {$media_id}";


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
       echo "<h1 class='text-danger text-center'>Successfully deleted!!</h1>";
       echo "<div class='text-center container'>";
       echo "<a href='../index.php'><button class='btn btn-info' type='button'>Back</button></a>";
       echo '</div></body>
          </html>';
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>