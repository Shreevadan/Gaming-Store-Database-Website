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
    <li><a href="store.php">Back</a></li>
</ul>
    <br>
    <h2 style="color: chartreuse;font-family: monospace;padding-left: 150px;">Please fill out this Form to proceed</h2>
    </head>
<body>
   <div class="m">
    <?php $gid=$_GET['game_id']; ?>
<form action="customerins.php" method="post">
    <label>Game-id:</label>
          <input type="text" name="gid" value="<?php echo $gid?>">
    <p>
    	<label for="customer_id">Customer Id:</label>
        <input type="text" name="customer_id" id="customer_id">
    </p>
    <p>
    	<label for="customer_name">Name:</label>
        <input type="text" name="customer_name" id="customer_name">
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
    <p>
        <label for="phone_no">Phone No:</label>
        <input type="text" name="phone_no" id="phone_no">
    </p>
   
    <input type="submit" class="button" value="BUY">
</form>
 </div>    
</body>
</html>   
