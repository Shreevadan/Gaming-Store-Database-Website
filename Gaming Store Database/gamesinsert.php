<?php

$link = mysqli_connect("localhost", "root", "", "gaming_store_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$game_id = mysqli_real_escape_string($link, $_REQUEST['game_id']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$year_of_release = mysqli_real_escape_string($link, $_REQUEST['year_of_release']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
$dev_id = mysqli_real_escape_string($link, $_REQUEST['dev_id']);
$platform_id = mysqli_real_escape_string($link, $_REQUEST['platform_id']);
 
// attempt insert query execution
$sql = "INSERT INTO games (game_id, name, category, year_of_release, price, dev_id, platform_id) VALUES ('$game_id', '$name', '$category', '$year_of_release', '$price', '$dev_id', '$platform_id')";
if(mysqli_query($link, $sql)){
    header("location:gamesmod.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>


