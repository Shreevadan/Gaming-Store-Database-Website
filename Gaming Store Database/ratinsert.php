<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gaming_store_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$game_id = mysqli_real_escape_string($link, $_REQUEST['game_id']);
$ign_rating = mysqli_real_escape_string($link, $_REQUEST['ign_rating']);
$metacritic_rating = mysqli_real_escape_string($link, $_REQUEST['metacritic_rating']);
$platform_rating = mysqli_real_escape_string($link, $_REQUEST['platform_rating']);


// attempt insert query execution
$sql = "INSERT INTO ratings (game_id, ign_rating, metacritic_rating, platform_rating) VALUES ('$game_id', '$ign_rating', '$metacritic_rating', '$platform_rating')";


if(mysqli_query($link, $sql)){
    header("location:ratmod.php");


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//mysqli_query($link, "CALL `avgrating`()"); 
// close connection
mysqli_close($link);
?>
