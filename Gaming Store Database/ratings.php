<?php
//session_start();
$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected";
}
if(!mysqli_select_db($con,"gaming_store_database"))
{
echo "database not selected";
}?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="icon" href="img/2.png">
<body background="img\12.jpg">
  
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
        color: black;
        
    }  
    h2{
        font-family: monospace;
        color: chartreuse;
    }
    table {
width: 60%;
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
tr 
    {
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
    }
    button{
        font-size: 50%;
        border: 1px solid black;
        background-color: chartreuse;
        border-radius: 4px;
    }
</style>

<ul>
     <li><a href="logout.php">Logout</a></li>
  <li><a href="welcome.php">Home</a></li> 
    <li><a href="store.php">Back</a></li>
</ul>

<br>
    </head>
    <?php
error_reporting(0);
$query = "CALL `get_avg`()";
$data= mysqli_query($con,$query);
$total = mysqli_num_rows($data);



if($total !=0)
{
    ?>
    <body>
<table>
<tr>
<th>ID</th>    
<th>Name</th>
<th>IGN</th>
<th>METACRITIC</th>
<th>Platform</th>
<th>Average</th>      
</tr>
<?php
    while($result= mysqli_fetch_assoc($data))
    {
        echo "<tr>
         <td>".$result['game_id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['ign_rating']."</td>
        <td>".$result['metacritic_rating']."</td>
        <td>".$result['platform_rating']."</td>
        <td>".$result['average_rating']."</td>
        

</tr>";
        
        
    }
}
else{
    echo "No record found";
}
?>
</table>
        
    </body>        
</html>