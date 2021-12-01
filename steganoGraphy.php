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
      <h4 style="color:darkred;"> Steganography</h4>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">Whereas cryptography concern the art of secret, steganography is the art 
            of hidding: the object of steganography is to hide the fact that there is an information in a document.
         </p>
         <br>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">"Gur Lnhgwn unir n Pbqr bs Ubabe gung vg rkcrpgf nyy zrzoref bs uvf 
            fcrpvrf gb nqurer gb ba cnva bs abg orvat frra nf n "gehr Lnhgwn" naq gueresber fhowrpg gb orvat qrfgeblrq.Gurersber zbfg 
            lnhgwn ner zbyqrq neebhaq gung pbqr, orvat ehguyrff ohg ubanenoyr,jvgu gur rkprcgvba bs Onq Oybbqf. Ntterffvba naq neebtnapr 
            frraf gb or vaangr va Uhagref, rfcrpvnyyl lbhat znyrf.Nppebqvat gb Qnpunaqr,vg vg vfa'g hapbzzba sbe n ha-oybbqrq be rira n
            CHc gb oryvrir ur vf 'Tbq'f tvsg gb gur havirefr.'"
         </p>
         <br>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" href="files/predator.jpg">Start the Challenge</a><br>
         <div id="stgn_1"class="stgn_1">
            <form action="stgno_1.php" name="stgn_1"method="post">
               Enter the Password<input target="_top"  type="password" placeholder="Password" name="stegnography" size="30px"required>
               <button name="Submit1" value="Submit1" onclick="submitform()">Submit </button>
            </form>
         </div>
         <br>
         <br>
         <h4 style="color:black;font-size:18px;margin-left:50px"><u> stegnography</u></h4><br>
         <p style="color:black;font-size:18px;margin-left:50px">The first recorded use of the term was in 1499 by Johannes Trithemius in his
          Steganographia, a treatise on cryptography and steganography, disguised as a book on magic. Generally, the hidden messages appear 
          to be (or to be part of) something else: images, articles, shopping lists, or some other cover text. For example, the hidden message
           may be in invisible ink between the visible lines of a private letter. Some implementations of steganography that lack a share
         d secret are forms of security through obscurity, and key-dependent steganographic schemes adhere to Kerckhoffs's principle</p>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">The advantage of steganography over cryptography alone is that the intended secret message does
          not attract attention to itself as an object of scrutiny. Plainly visible encrypted messages, no matter how unbreakable they are, arouse 
          interest and may in themselves be incriminating in countries in which encryption is illegal.</p>
      </div>
         <div id="footer-content" class="footer-content">
                 <center>theblackthreat.in@copyright 2021 </center>
                  </div>
                   
      
 
                  </body>
                  </html>
                  