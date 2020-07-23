<?php
$db = mysqli_connect("localhost", "root","");
mysqli_select_db($db,"gaming_store_database");
$game_id=$_POST['delete'];
mysqli_query($db,"DELETE FROM games WHERE game_id=$game_id");
header("location:gamesmod.php");
?>