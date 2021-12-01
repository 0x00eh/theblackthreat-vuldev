<html>
  <head>
    <title>SQLi Level-1</title>
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
    <?php echo '<p >Password Change for level-1</p>';
    echo "<br/>";
    echo "<br/>";
    echo ' Ref::> http://'. $_SERVER['REQUEST_URI'];
    //error_reporting(0);//Error Hider

     ?>
    <?php
    require("../lib/db.php");
      mysqli_select_db($con, "sqli");
      $id = $_GET['id']; // No input validation!! 
      $password = $_GET['password'];
      $result = mysqli_query($con, "UPDATE users SET password = $password WHERE id=$id");
    
      mysqli_close($con);

      if($result) {
        echo "<br/>";
        echo "<br/>";
        echo " Congratulation ! Password is successfully changed";
      }
    ?>
</div>
</div>
<style>
.L1{
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
  </body>
</html>