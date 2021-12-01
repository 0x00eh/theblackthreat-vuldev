<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/spider-icon.png" />
</head>
<style>
body {
 
  padding: 0px;
  background: url(images/ragis_img.png);
  background-repeat: no-repeat;
  background-size: 1919px 985px;
}       
 </style>
<body>
<div id="navbar"class="navbar">
       <div class="Menu">  
       <span id="guide_icon" ><img src="images/spider-icon.png" alt="logo" style="margin:-0px;height: 25px;" />   
        </span>
         </div>
         <div id ="logo" class="logo"  >
            <img src="images/theblackthreat.png" alt="logo" style="margin:-10px;height: 57px; margin-left: 85px;"href="" />
           <div class="user" id="user">
         
           <a href="logout.php" alt="Logout" style="color:white;font-size:20px;text-decoration:none;"></a>
           </div>      
          </div>
      </div>
      
 <form class="form" method="post" name="login">
        <h1 class="login-title">Login Here!</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>
<?php
    require('lib/db.php');
            session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='result_login' id='result1_login'>
                  <h4><center>Incorrect Username/password.</center></h4><br/>
                 </div>";
        }
    } else {}
?>
   

</body>
</html>
