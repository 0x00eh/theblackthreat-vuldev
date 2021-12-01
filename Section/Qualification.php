<html>
<body>
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>TheBlackThreat</title>
      <link rel="stylesheet" href="../css/main.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="vendor/check_api.js"></script>
      <script src="vendor/containeropen.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
      <link rel="stylesheet" href="css/style.css?v=" />
      <script src="js/jquery.min.js"></script>
   </head>


   <body>
   <div id="navbar"class="navbar">
         <div class="Menu">  
            <span id="guide_icon" ><img src="../images/spider-icon.png" alt="logo" style="margin:-0px;height: 25px;" />    
            </span>
         </div>
         <div id ="logo" class="logo" >
            <img src="../images/theblackthreat.png" alt="logo" style="margin:-8px;height: 57px;" />
            <div class="user" id="user">
               <a href="logout.php" alt="Logout" style="color:white;font-size:20px;text-decoration:none;">Hey <?php echo $_SESSION['username'];?>!</a>
            </div>
         </div>
      </div>
      <!---------------------------------------------------------------------------------------------------->


       <script> 
            //---------------ipinfo-----------------//
                    $.getJSON("https://api.ipify.org?format=json", 
                   function(data) 
                   { 
                           // Setting text of element P with id tbt 
                         $("#tbt").html(data.ip); 
                         echo "data.ip";
                   }) 
       </script> 
 
      <!---------------------------------------------------------------------------------------------------->       
         

      <div id="mySidenav" class="sidenav" id ="sidenav"> 
         <a class="active" href="../Section/dashboard.php" >Dashboard</a>
         <a  href="../Section/Qualification.php" >Qualification</a>
         <a  href="../Section/cmdInjection.php" >Cammand-Injection</a>
         <a  href="../Section/Networking.php" >Networking</a>
         <a  href="../Section/Steganography.php" >Steganography</a>
         <a  href="../Section/Cryptanalysis.php" >Cryptanalysis</a>
         <a  href="../Section/Sqlinjection.php" >SQL Injection</a>
         <a  href="../Section/Authentication.php" >Authentication Bypass</a>

      </div>
      <div id="nav_back" class="nav_back">
      </div>
</body>
</html>