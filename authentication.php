<?php
   session_start();
   //include auth_session.php file on all user panel pages
   include("auth_session.php");
   require_once('client.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>TheBlackThreat</title>
      <link rel="stylesheet" href="css/main.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="vendor/check_api.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
   </head>
   <body>
   <div id="navbar"class="navbar">
         <div class="Menu">  
            <span id="guide_icon" ><img src="images/spider-icon.png" alt="logo" style="margin:-0px;height: 25px;" /></span>
         </div>
         <div id ="logo" class="logo" >
            <img src="images/theblackthreat.png" alt="logo" style="margin:-8px;height: 57px;" />
            <div class="user" id="user">
               <a href="logout.php" alt="Logout" style="color:white;font-size:20px;text-decoration:none;">Hey <?php echo $_SESSION['username'];?>!</a>
            </div>
         </div>
   </div>
      <!---------------------------------------------------------------------------------------------------->

       <!---------------------------------------------------------------------------------------------------->       
      <div id="mySidenav" class="sidenav" id ="sidenav"> 
         <a class="active" href="dashboard.php" >Dashboard</a>
         <a  href="Qualification.php" >Qualification</a>
         <a  href="cmdInjection.php" >Cammand-Injection</a>
         <a  href="netWorking.php" >Networking</a>
         <a  href="steganoGraphy.php" >Steganography</a>
         <a  href="cryptoGraphy.php" >Cryptanalysis</a>
         <a  href="sqlInjection.php" >SQL Injection</a>
         <a  href="authentication.php" >Authentication Bypass</a>
      </div>
      <div id="nav_back" class="nav_back">
         <!--- only for design  --->
      </div>
       <!---------------------------------------------------------------------------------------------------->       
      <div class="container" id="container" style="">

         <h4 style="color:darkred;"> Authentication bypass</h4><br>
         <p style="color:black;font-size:18px;margin-left:50px;">Authentication is any process by which a system verifies 
         the identity of a User who wishes to access it.Web applications authentication may be implemented using Credentials,
          each of which is composed of a User ID and Password</p>
           
         <div class="tbl_easy" id ="tbl_easy">
          <form name="frmname"method="post" action="authentication.php">
               <div id="upper" class="upper" style="">
                  <label for="usrname">User Id:</label><br>
                  <input  type="text" id="usrname" name="id" style="height: 30px;width: 230px;border-radius: 2px;"required><br>
                                 
                  <button name="Submit" value="Submit">Submit</button>
               </div>
            </form><br>
            <br>
            <br>
            <br>
            <h4 style="color:black;font-size:18px;margin-left:-34px"><u>Authentication Bypass </u></h4><br>   
            <p style="color:black;font-size:18px;margin-left:-34px;width: 354%;">Organizations failing to enforce strong access policy and authentication controls could allow an attacker to bypass authentication.
            Attackers could also bypass the authentication mechanism by stealing the valid session IDs or cookies.<br><br>
            Authentication bypass vulnerability could allow attackers to perform various malicious operations by bypassing the device authentication mechanism.
            What's the issue - Authentication bypass exploit is mainly due to a weak authentication mechanism.<br><br>
           Organizations failing to enforce strong access policy and authentication controls could allow an attacker to bypass authentication.</p>
         </div>
         
      </div>
      <div id="footer-content" class="footer-content">
                 <center>theblackthreat.in@copyright 2021 </center>
         </div> 
                  </body>
                  </html>
                  