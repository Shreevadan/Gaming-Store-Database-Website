<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gaming_store_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$dev_id = mysqli_real_escape_string($link, $_REQUEST['dev_id']);
$dev_name = mysqli_real_escape_string($link, $_REQUEST['dev_name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone_no = mysqli_real_escape_string($link, $_REQUEST['phone_no']);
$game_engine = mysqli_real_escape_string($link, $_REQUEST['game_engine']);
 
// attempt insert query execution
$sql = "INSERT INTO developer (dev_id, dev_name, address, phone_no, game_engine) VALUES ('$dev_id', '$dev_name', '$address', '$phone_no', '$game_engine')";
if(mysqli_query($link, $sql)){
    header("location:devmod.php");


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

