<?php 

require_once 'actions/db_connect.php';

if($_GET['media_id']) {
   $media_id = $_GET['media_id'];

   $sql = "SELECT * FROM media WHERE media_id = {$media_id}";
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Edit Media</title>

   <style type="text/css">
     fieldset {
       margin: auto;
       margin-top: 100px;
       width: 50%;
     }

     table tr th {
       padding-top: 20px;
     }
   </style>

 </head>
 <body>

  <div class="container">
    


  <fieldset>
   <legend>Update Media</legend>

   <form action="actions/a_update.php" method="post">
     <table class="table-bordered" cellspacing="0" cellpadding="0">
       
       <tr>
         <th>ISBN</th>
         <td><input type="text" name="ISBN" placeholder="ISBN" value="<?php echo $data['ISBN'] ?>" /></td>
       </tr>
       <tr>
         <th>Title</th>
         <td><input type="text" name="titel" placeholder="titel" value="<?php echo $data['titel'] ?>" /></td>
       </tr>
       <tr>
         <th>Description</th>
         <td><input type="text" name="description" placeholder="description" value="<?php echo $data['description'] ?>" /></td>
       </tr> 
         <tr>
           <th>Date published</th>
           <td><input type="text" name="pub_date" placeholder="JJJJ-MM-DD" value="<?php echo $data['pub_date'] ?>"/></td>
         </tr> 
         <th>Available</th>
       <td><select type="text" name="available" placeholder="Please choose" value="<?php echo $data['available'] ?>" />
         <option selected>Choose...</option>
         <option value="yes">yes</option>
         <option value="no">no</option>

       </td>
 </tr>
         
      <tr>
       <input type="hidden" name="media_id" value="<?php echo $data['media_id']?>" />
       <td><button type="submit">Save Changes</button></td>
       <td><a href="index.php"><button type="button">Back</button></a></td>
      </tr>
      </table>
      </form>

      </fieldset>
        </div>

      </body>
      </html>
<?php 
}
?>



