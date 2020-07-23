<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gaming_store_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$customer_id = mysqli_real_escape_string($link, $_REQUEST['customer_id']);
$customer_name = mysqli_real_escape_string($link, $_REQUEST['customer_name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone_no = mysqli_real_escape_string($link, $_REQUEST['phone_no']);
$gid = $_POST['gid'];
 
// attempt insert query execution
$sql = "INSERT INTO customer (customer_id, customer_name, address, phone_no, gid) VALUES ('$customer_id', '$customer_name', '$address', '$phone_no', '$gid')"; 
if(mysqli_query($link, $sql)){
    echo"<script> alert ('Thank you for buying the game')</script>";
     echo"<script> window.location.href='store.php'</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
/*mysqli_close($link);
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Gaming%20Store%20Database/store.php">*/

