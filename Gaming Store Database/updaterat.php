
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
    opacity: 0.7;    }
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
    <li><a href="ratmod.php">Back</a></li>
</ul>
    <br>
    </head>

    <body>
<div class="m">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<label>ID To Update:</label>
             <input type="text" name="game_id" required><br><br>
<label>IGN Rating:</label>
        <input type="text" name="ign_rating" required><br><br>
<label>Metacritic Rating:</label>
        <input type="text" name="metacritic_rating" required><br><br>
<label>Platform Rating:</label>
        <input type="text" name="platform_rating" required><br><br>
            

            <input type="submit" class="button" name="update" value="Update Data">

        </form>
</div>
    </body>


</html>
<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "gaming_store_database";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $game_id = $_POST['game_id'];
   $ign_rating = $_POST['ign_rating'];
   $metacritic_rating = $_POST['metacritic_rating'];
   $platform_rating = $_POST['platform_rating'];
   // mysql query to Update data
   $query = "UPDATE `ratings` SET `ign_rating`='".$ign_rating."',`metacritic_rating`='".$metacritic_rating."',`platform_rating`= '".$platform_rating."' WHERE `game_id` = $game_id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       header("location:ratmod.php");
   }else{
       echo 'Data Not Updated';
   }
    mysqli_query($link, "CALL `avgrating`()"); 
   mysqli_close($connect);
}

?>
