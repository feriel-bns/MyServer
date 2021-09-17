<?php

//Define your host here.
$HostName = "nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";

//Define your database username here.
$HostUser = "r7iz5wrci1spczw2";

//Define your database password here.
$HostPass = "y1qnfwttrqsdtg20";

//Define your database name here.
$DatabaseName = "zzjr2yzlkkznr5gg";

$conn=mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName) or die("connection impossible");
if ($conn){
    echo 'Connection success';
}else {
    echo 'Connection failed';
    
}
    
 
?>
