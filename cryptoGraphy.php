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
      <h4 style="color:darkred;"> Cryptanalysis</h4>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">Cryptography or cryptology is the practice and study of techniques for secure
            communication in the presence of third parties called adversaries.
         </p>
         <br>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">"Behind every successful Coder there an even more successful De-coder to understand that code."</p>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">Task #1)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_1.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:18px;margin-left:50px">Task #1)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_1.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:18px;margin-left:50px">Task #2)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_2.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:18px;margin-left:50px">Task #3)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_3.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:18px;margin-left:50px">Task #4)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_4.txt">Start the Challenge</a><br>
         <div id="crypto_1"class="crypto_1">
            <form action="crypto_1.php" name="crypto_1"method="post">
               Enter the Sentence(Combination of all Password)<input id="crypto_1"class="crypto_1" placeholder="Password" type="password"  name="crypto_1" size="30px"required>
               <button name="Submit" value="Submit">Submit</button>
            </form>
         </div>    
      </div>
      <div id="footer-content" class="footer-content">
                 <center>theblackthreat.in@copyright 2021 </center>
         </div>  
                  </body>
                  </html>
                  