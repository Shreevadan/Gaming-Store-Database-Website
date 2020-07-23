<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="icon" href="img/2.png">
<body background="img\1.jpg">
  
<h1 style="color: chartreuse;font-family: monospace;background-color: #151515;text-align: center;font-size: 300%;padding: 20px 20px">Gaming Store Database</h1>
    </body>
    </head>
   
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
</style>

<ul>
    <li><a href="logout.php">Logout</a></li>
  <li><a href="reset-password.php">Reset Password</a></li>
      
</ul>

<body>
    
        <h1 style="color: chartreuse;font-family: monospace;background-color: #151515;text-align: center;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
<link rel="stylesheet" href="css\contact.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css\welcome.css" media="screen" type="text/css" />

   <div class="first-box">
    <img src="img\9.png" width=25%>
       <p style="font-size: 150%;font-family: monospace;color: chartreuse">Looking for a game?</p>
       <p style="font-size: 150%;font-family: monospace;color: chartreuse">Visit the store.</p>
       

       <a href="store.php" class="button"><strong>Click Here</strong></a>


       
  </div>

  <div class="second-box">
     <img src="img\10.png" width=25%>
      <p style="font-size: 150%;font-family: monospace;color: chartreuse">Are you a Developer?</p>
      <p style="font-size: 150%;font-family: monospace;color: chartreuse">Sell your games.</p>
     

<a href="developer.php" class="button"><strong>Click Here</strong></a>


  </div>

</body>
</html>