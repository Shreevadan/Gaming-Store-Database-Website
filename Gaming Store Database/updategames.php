<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected";
}
if(!mysqli_select_db($con,"gaming_store_database"))
{
echo "database not selected";
}
error_reporting(0);
 $_GET['game_id'];
 $_GET['name'];
 $_GET['category'];
 $_GET['year_of_release'];
 $_GET['price'];
 $_GET['dev_id'];
 $_GET['platform_id'];
?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/2.png">
<body background="img\15.png">
  
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
    label{
        color: white;
        font-family: monospace;
        font-size: 120%;
    }
.m input[type=text], input[type=password] {
 height: 44px;
    color: chartreuse;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  background: none;
  border: none;
  border-bottom: 2px solid #c0c0c0;
  padding: 0 8px;
    outline: none;
} 
     .m{
        padding-left: 200px;
        width: 300px;
    }      
</style>

<ul>
     <li><a href="logout.php">Logout</a></li>
  <li><a href="welcome.php">Home</a></li> 
    <li><a href="gamesmod.php">Back</a></li>
</ul>
    <br>
    </head>

    <body>
<div class="m">
       <form action="" method="GET">
     <tr>

            <label>Game-id:</label>
            <input type="text" name="game_id" value="<?php echo $_GET['game_id']?>">
    <br>        
    <br>
        </tr>
            
            
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $_GET['name']?>">
     <br>       
    <br>
    <tr>
        
            <label>Category:</label>
            <input type="text" name="category" value="<?php echo $_GET['category']?>">
     <br>       
    <br>
        </tr>
           
            <label>Year of Release:</label>
            <input type="text" name="year_of_release" value="<?php echo $_GET['year_of_release'] ?>">
            <br>
            <br>
            <label>Price:</label>
            <input type="text" name="price" value="<?php echo $_GET['price'] ?>">
            
            <br>
            <br>
            
            <label>Dev Id:</label>
            <input type="text" name="dev_id" value="<?php echo  $_GET['dev_id'] ?>">
            
            <br>
           <br>
            
            <label>Platform Id:</label>
            <input type="text" name="platform_id" value="<?php echo  $_GET['platform_id'] ?>">
            
            <br>
            <input type="submit" class="button" name="submit" value="Update">
        </form>
        </div>
    </body>


</html>

<?php
if ($_GET['submit'])
{
   $game_id = $_GET['game_id'];
   $name = $_GET['name'];
   $category =$_GET['category'];
   $year_of_release = $_GET['year_of_release'];
   $price = $_GET['price'];
    $dev_id = $_GET['dev_id'];
     $platform_id = $_GET['platform_id'];
    $query = "UPDATE games SET name='$name' ,category='$category',year_of_release='$year_of_release',price='$price',dev_id='$dev_id',platform_id='$platform_id' where game_id='$game_id' ";
    $data = mysqli_query($con,$query);
    if($data)
    {
        header("location:gamesmod.php");
    }
    else{
        echo "recorded not updated";
    }
}
?>