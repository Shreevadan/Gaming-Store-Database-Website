
<?php
$db = mysqli_connect("localhost", "root","");
mysqli_select_db($db,"gaming_store_database");
$platform_id=$_POST['delete'];
mysqli_query($db,"DELETE FROM platform WHERE platform_id=$platform_id");
header("location:platmod.php");
?>
   