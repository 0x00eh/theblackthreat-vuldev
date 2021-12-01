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
<?php
function get_client_ip() {
   $ipaddress = '';
   if (isset($_SERVER['HTTP_CLIENT_IP']))
       $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
   else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
       $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
   else if(isset($_SERVER['HTTP_X_FORWARDED']))
       $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
   else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
       $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
   else if(isset($_SERVER['HTTP_FORWARDED']))
       $ipaddress = $_SERVER['HTTP_FORWARDED'];
   else if(isset($_SERVER['REMOTE_ADDR']))
       $ipaddress = $_SERVER['REMOTE_ADDR'];
   else
       $ipaddress = 'UNKNOWN';
   echo  "ipaddress";
}
?>
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
      <h4 style="color:darkred;"> Home</h4>
         <p class="ip" name='tbt'id="tbt">Ray-ID/IP</p>
         <div class="header_tbl " id="header_tbl"></div>
         <div class="container_tbl" id="container_tbl">
            <h3 style="color:darkred;">General Instructions</h3>
            <br><br>
            <p style="color:black;font-size: 18px;">It is up to the user how they approach TheBlackThreat vulnerabilty . Either by working
               through every module at a fixed level, or selecting any module and working up to reach the highest 
               level they can before moving onto the next one. There is not a fixed object to complete a module; 
               however users should feel that they have successfully exploited the system as best as they possible 
               could by using that particular vulnerability.
               <br>
               <br>
               Please note, there are both documented and undocumented vulnerability with this software. This is 
               intentional. You are encouraged to try and discover as many issues as possible.
               TheBlackThreat vulnerabilty also includes a Web Application Firewall (WAF), PHPIDS, which can be enabled at any stage 
               to further increase the difficulty. This will demonstrate how adding another layer of security 
               may block certain malicious actions. Note, there are also various public methods at bypassing these
               protections (so this can be seen as an extension for more advanced users)!
               There is a help button at the bottom of each page, which allows you to view hints & tips for that 
               vulnerability. There are also additional links for further background reading, which relates to that security issue.
            </p>
         </div>
         <div class=" contact_tbl" id="contact_tbl">
            <p style="color:white;font-size:18px;">Contact
            <p> <br>
               <a href="https://www.facebook.com/ravisvhanker.vishwakarma"target="_blank" class="fa fa-facebook"></a>
               <a href="https://twitter.com/AmitianRavisv"target="_blank" class="fa fa-twitter"></a>
               <a href="https://www.linkedin.com/in/theblackthreat/"target="_blank" class="fa fa-linkedin"></a>               
               <a href="https://shorturl.at/afAMX"target="_blank" class="fa fa-youtube"></a>

         </div>
         <div class="about_tbl" id="about_tbl">
            <p style="color:white;font-size:18px;">About
            <p><br>
               <img src="images/wallpaper.jpg">
            <p id="about"class="about"style="color:white;font-size:18px;margin-top:-40px;margin-left: 49px;"> Hello everyone I'm Ravishanker vishwakarma. And this site is made for you if you want to test you cyber security basic skill then i'm inviting you.</p>
            <a href="files/Ravishanker's Resume.pdf"target="_blank" style="text-decoration:none;color:White;font-size:18px;margin-left: 285px;"> Download CV</a>

         </div>
         <div class="tutorial_tbl"id="tutorial_tbl">
            <p style="color:white;font-size:18px;">Tutorial
            <p><br>
            <p style="color:white;font-size:18px;">If you Face any type of Problem Or you don't Know about what is good way for hacking then...</p>
            <br>           
            <center>
               <hr style="color:white;width:80%;">
               <br>
               <a href="https://theblackthreart.wix.com/theblackthreat"target="_blank" style="text-decoration:none;color:White;font-size:18px;"> Click here for Tutorial</a>
            </center>
         </div>

      </div>
      <div id="footer-content" class="footer-content">
                 <center>theblackthreat.in@copyright 2021 </center>
         </div> 
                   </body>
                  </html>
                  