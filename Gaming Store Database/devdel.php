
<?php
$db = mysqli_connect("localhost", "root","");
mysqli_select_db($db,"gaming_store_database");
$dev_id=$_POST['delete'];
mysqli_query($db,"DELETE FROM developer WHERE dev_id=$dev_id");
header("location:devmod.php");
?>
    