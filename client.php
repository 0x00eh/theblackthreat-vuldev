<?php
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

include("lib/db.php");
try{
 $ip = getUserIP();
 $statusCode='';
 $ipAddress='';
 $countryCode='';
 $countryName='';
 $regionName='';
 $zipCode='';
 $latitude='';
 $longitude='';
 $timeZone='';
 $apikey='6b8581c7f572b53d11a10791acde9efc62484502cfdc90152dd419cb187545bb';
 $url = 'http://api.ipinfodb.com/v3/ip-city/?key='.$apikey.'&format=json&ip='.$ip;
 $response = file_get_contents($url);
  $json_array=json_decode($response,true);
  
  
  function insert_into_database($statusCode,$statusMessage,$ipAddress,$countryCode,$countryName,$regionName,$cityName,$zipCode,$latitude,$longitude){
    require('lib/db.php');
    if($statusCode=='OK'){
      $sql='insert into ip_location(statusCode,ipAddress,countryCode,countryName,regionName,zipCode,latitude,longitude,timeZone) value (?,?,?,?,?,?,?,?,?)';
      $stm=mysqli_prepare($con,$sql);
      mysqli_stmt_bind_param($stm,"sssssssss",$statusCode,$ipAddress,$countryCode,$countryName,$regionName,$zipCode,$latitude,$longitude,$timeZone);
      mysqli_stmt_execute($stm);
    }
  } 

 function display_array_recursive($json_rec){
    if($json_rec){
      foreach($json_rec as $key=> $value){
        if(is_array($value)){
          display_array_recursive($value);
        }else{
          //echo $key.'--'.$value.'<br>';
          
          if($key=='statusCode'){
            $statusCode=$value;
          }
          if($key=='statusMessage'){
            $statusMessage=$value;
          }
          if($key=='ipAddress'){
            $ipAddress=$value;
          }
          if($key=='countryCode'){
            $countryCode=$value;
          }
          if($key=='countryName'){
            $countryName=$value;
          }
          if($key=='regionName'){
            $regionName=$value;
          }
          if($key=='cityName'){
            $cityName=$value;
          }
          if($key=='zipCode'){
            $zipCode=$value;
          }
          if($key=='latitude'){
            $latitude=$value;
          }
          if($key=='longitude'){
            $longitude=$value;
            insert_into_database($statusCode,$statusMessage,$ipAddress,$countryCode,$countryName,$regionName,$cityName,$zipCode,$latitude,$longitude);
          }
        } 
      } 
    } 
  }
    display_array_recursive($json_array);
}catch(Exception $e){
    echo $e->getMessage();
}
?>
