<!DOCTYPE html>
<html> 
<head> 
<title>Fetch image size</title> 
</head> 
<body> 


<?php
  
  /* 
  Work in progress.
  */
  
  
if(isset($_POST['submit'])) 
{ 
    $name = $_POST['url'];
    echo "<b>You can use the following form again to enter a new image URL.</b>"; 
}
?>
<form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
   <input type="text" name="url"><br>
   <input type="submit" name="submit" value="Get image dimensions"><br>
</form>

</body> 
</html>
