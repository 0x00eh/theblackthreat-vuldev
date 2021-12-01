<html>
  <head>
    <title>SQLi Level-1</title>
    <style>
.L1 {
height: 900px;
text-align: center;
font-size: 25px;
color: #a30505;
width: 90%;
background-color: #a3cff0;
width: 60%;
margin-left: 380px;
margin-top: 50px;
padding: 3px;
border-width: 2px;
border-color: #5d4949db;
}

</style>
  </head>

<body>
<div class="L1" id="L1" >
<div class="formation" id="formation" style="margin-top:185px;">
<?php
session_start();
if ( $_SESSION['username'] === NULL ) 
  {
    header("location:../../../../login.php"); 
  }
?>
<?php
    error_reporting(0);//Error Hidien

    echo '<p>SQL injection Level 1</p>';
    echo $_SESSION['username'];

    echo "<br/>";
    echo "<br/>";
    echo 'http://'. $_SERVER['REQUEST_URI']; 
    echo "<br/>";
    echo "<br/>";
      require("../lib/db.php");
      $id = $_GET['id']; // No input validation!!
$result = mysqli_query($con, "SELECT * FROM users WHERE id=$id");

while($row = mysqli_fetch_assoc($result)) {
   echo "<tr><td>" . 'id' . "</td>
             <td>" . " | " .'name' . "</td>
             <td>" . " | " .'surname' . "</td>
             <td>" . " | " .'email' . "</td>
         </tr>";
   echo "<br/>";
   echo "<tr><td>" . $row['id'] . "</td>
             <td>" . " | " . $row['name'] . "</td>
             <td>" . " | " .$row['surname'] . "</td>
             <td>" . " | " .$row['email'] . "</td>
         </tr>"; 
      }
      echo "<br/>";
      echo "<br/>";
      echo "<br/>";
      echo "<br/>";
      echo "<br/>";
    ?>
</div>
</div>
<a href="../change-pwd.php/?id=&password= " style="margin-left: 400px;" >Click Here to change the Passwprd </a>

  </body>
    </html>
