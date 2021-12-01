
<html lang="en">
<head>
    <title>Level-1+</title>
</head>
    <style>
.L2 {
height: 900px;
text-align: center;
font-size: 24px;
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
  <body>
    <div class="L2"id="L2">
        <div id="L2-login" class="L2-login">
        <form method="POST" autocomplete="off">
            <label for="username">Username:</label>
            <input type="username" id="username" name="username"><br><br>
           <!---        Passward   admin' -- // -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" minlength="8"><br><br>
            <input type="submit" type="button">
            <input type="reset" value="Reset"/>
        </form>
        </div>

<?php
require("../lib/db.php");

if (!empty($_GET['msg'])) {
    echo "Please login to continue.";
}


if (!empty($_REQUEST['username'])) {
$usrnm = ($_REQUEST['username']);
$paswd = $_REQUEST['password'];

$query = "SELECT * FROM users_L2 where username='".$usrnm."' && password = '".md5($paswd)."'" ;
    if (!mysqli_query($con,$query))
    {
        die('Error: ' . mysqli_error($con));
    }
    
    $result = mysqli_query($con,$query);
    $row_cnt = mysqli_num_rows($result);

    if ($row_cnt > 0) {
    
    $row = mysqli_fetch_array($result);
    
    if ($row){
    //$_SESSION["id"] = $row[0];
    $_SESSION["username"] = $row[1];
    $_SESSION["name"] = $row[3];
    //ob_clean();
    
    header('Location : ../index.php');
    }
}
    else{
        echo "Invalid password!";
        }
}
?>
</div>
        <a  style="margin-left: 400px;">Source code by @theblackthreat</a>

</body>
</html>