<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>

     <link rel="icon" href="img/2.png">
    <body background="img/15.png">
  
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
width: 80%;
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
<form action="ratinsert.php" method="post">
	<p>
    	<label for="game_id">Game Id:</label>
        <input type="text" name="game_id" id="game_id">
    </p>
    <p>
    	<label for="ign_rating">Ign rating:</label>
        <input type="text" name="ign_rating" id="ign_rating">
    </p>
    <p>
        <label for="metacritic_rating">Metacritic Rating:</label>
        <input type="text" name="metacritic_rating" id="metacritic_rating">
    </p>
    <p>
        <label for="platform_rating">Platform rating:</label>
        <input type="text" name="platform_rating" id="platform_rating">
    
    </p>

    <input type="submit" class="button" value="Add Records">
</form>
        </div>
</body>
</html>