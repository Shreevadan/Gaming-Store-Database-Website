
<?php
$db = mysqli_connect("localhost", "root","");
mysqli_select_db($db,"gaming_store_database");
$game_id=$_POST['delete'];
mysqli_query($db,"CALL `deleterat`($game_id)");
header("location:ratmod.php");
?>
    