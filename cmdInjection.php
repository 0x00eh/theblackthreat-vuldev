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
      <script src="vendor/connect_server.js"></script>
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
      <h4 style="color:darkred;"> Command Injection</h4>
      <br>
      <br>
      <h4 style="color:black;font-size:18px;margin-left:50px"><u> Pinging Devices</u></h4>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">This article explains how to ping an IP address for 
            a device. The goal of pinging a device is to find out if a device is reachable at a particular IP address.
         </p>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">Ping is a computer network administration utility used to
            test the reachability of a host on an Internet Protocol (IP) network and to measure the round-trip time for messages sent from the originating host to a destination computer.
         </p>
         <br>
         <p style="color:black;font-size:18px;margin-left:50px">A device on a computer network should respond to a echo request (ping) with an echo reply (pong) confirming it is online. This reply should come
            within milliseconds. If a reply does not come it is said to have "timed out" because the predefined wait time for a reply has been exceeded. If no reply is seen we typically 
            assume that no device is present at, or assigned with, that IP address.
         </p>
<br>
<br>
         <h3 style="color:black;font-size:18px;margin-left:50px;margin-left: -930px;">Vulnerability: Command Injection</h3>
    <!-----------------------Level-1 --------------------------->

         <div id="cmd-inj-lvl-1"class="cmd-inj-lvl-1">
            <form action="" name="ping"method="post">
               Ping a Device Level-1<input id="cmd_injection"class="cmd_injection" type="text" name="ip-lvl-1" size="50px">
               <button name="Submit"target="_blank" value="Submit" >Submit</button>
            </form>
         </div>
          <?php
           error_reporting(0);  
         $target = $_POST[ 'ip-lvl-1' ];
         if($target=='')
         {
            echo " ";
         }
         else{
         $substitutions = array(
            '&&' => '',
            ';'  => '',
         );
         $target = str_replace( array_keys( $substitutions ), $substitutions, $target );
         if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
            $cmd = shell_exec( 'ping  ' . $target );
        }
        else {
            $cmd = shell_exec( 'ping  -c 4 ' . $target );
        }
        echo "<pre style='margin-left: 45px;width: 745px; height:600px;position:absolute;'>{$cmd}</pre>";

      }
    ?> 
        <!-----------------------//Level-2 --------------------------->
        <div class="Vline"></div>

         <div id="cmd-inj-lvl-2"class="cmd-inj-lvl-2">
            <form action="" name="ping"method="post">
               Ping a Device Level-2<input id="cmd_injection-lvl-2"class="cmd_injection" type="text" name="ip-lvl-2" size="50px">
               <button name="Submit2"target="_blank" value="Submit2" >Submit</button>
            </form>
         </div>   
         <?php

if( isset( $_POST[ 'Submit2' ]  ) ) {
	// Get input
	$target = trim($_REQUEST[ 'ip-lvl-2' ]);
//sanitization
	$substitutions = array(
		//'&'  => '',
		';'  => '',
		'| ' => '',
		'-'  => '',
		'$'  => '',
		'('  => '',
		')'  => '',
		'`'  => '',
		'||' => '',
	);

	$target = str_replace( array_keys( $substitutions ), $substitutions, $target );

	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( 'ping  ' . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( 'ping  -c 4 ' . $target );
	}
	echo "<pre style='margin-left: 45px;width: 745px; height:600px;position:absolute;''>{$cmd}</pre>";
}

?>     
<br>
    </div>
      
            
      </div>
      <div id="footer-content" class="footer-content">
                 <center>theblackthreat.in@copyright 2021 </center>
         </div> 
                  </body>
                  </html>
                  