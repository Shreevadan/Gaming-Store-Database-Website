<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="icon" href="img/2.png">
<body background="img\13.jpg">
  
<h1 style="color: chartreuse;font-family: monospace;background-color: #151515;text-align: center;font-size: 300%;padding: 20px 20px">Gaming Store Database</h1>
    </body>
   
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #151515;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
    font-family: monospace;
    font-size: 150%;
}

li a:hover {
    color: #151515;
  background-color: chartreuse;
    font-family: monospace;
}
    
    a{
        font-family: monospace;
        font-size: 150%;
        
    }  
    h2{
        font-family: monospace;
        color: chartreuse;
    }
table {
width: 100%;
color: chartreuse;
font-family: monospace;
font-size: 20px;
text-align: left;
    table-layout: fixed ;
}
th {
background-color: chartreuse;
color: black;
}
tr {
    background-color: black;
    } 
    .button {
  background-color: chartreuse;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover {
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: chartreuse;
    opacity: 0.7;    
</style>

<ul>
     <li><a href="logout.php">Logout</a></li>
  <li><a href="welcome.php">Home</a></li> 
    <li><a href="developer.php">Back</a></li>
</ul>
<br>
    <body>
<table>
<tr>
<th>Id</th>
<th>Name:</th>    
<th>IGN Rating</th>
<th>Metacritic Rating</th>
<th>Platform Rating</th>
<th>Average Rating</th>   
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "gaming_store_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CALL `get_avg`();";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["game_id"]. "</td><td>"
    . $row["name"] . "</td><td>"
    . $row["ign_rating"] . "</td><td>"
    . $row["metacritic_rating"]. "</td><td>"
    . $row["platform_rating"]. "</td><td>"
. $row["average_rating"]. "</td></tr>";
}
echo "</table>";
} else { echo ""; }
$conn->close();
?>
</table>
         <br>
    <br>
        <a href="addrat.php" class="button"><strong>Insert</strong></a>
        <a href="deleterat.php" class="button"><strong>Delete</strong></a>
        <a href="updaterat.php" class="button"><strong>Update</strong></a>
    
    </body>
</html>