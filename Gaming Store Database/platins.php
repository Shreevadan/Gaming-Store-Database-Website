<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gaming_store_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$platform_id = mysqli_real_escape_string($link, $_REQUEST['platform_id']);
$platform_name = mysqli_real_escape_string($link, $_REQUEST['platform_name']);
$brand = mysqli_real_escape_string($link, $_REQUEST['brand']);
$variant = mysqli_real_escape_string($link, $_REQUEST['variant']);

 
// attempt insert query execution
$sql = "INSERT INTO platform (platform_id, platform_name, brand, variant) VALUES ('$platform_id', '$platform_name', '$brand', '$variant')";
if(mysqli_query($link, $sql)){
    header("location:platmod.php");


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

