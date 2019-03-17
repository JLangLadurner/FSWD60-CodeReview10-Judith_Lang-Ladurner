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
   <title>Delete User</title>
</head>
<body>

<h3>Do you really want to delete this user?</h3>
<form action="actions/a_delete.php" method="post">

   <input type="hidden" name="id" value="<?php echo $data['media_id'] ?>" />
   <button type="submit">Yes, delete it!</button>
   <a href="index.php"><button type="button">No, go back!</button></a>
</form>

</body>
</html>

<?php
}
?>