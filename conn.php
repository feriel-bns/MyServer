<?php

//Define your host here.
$HostName = "'us-cdbr-east-04.cleardb.com'";

//Define your database username here.
$HostUser = "b4a84a4b9166f9";

//Define your database password here.
$HostPass = "8e08be0f";

//Define your database name here.
$DatabaseName = "heroku_abde6316f609ed5";

$conn=mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName) or die("connection impossible");
if ($conn){
    echo 'Connection success';
}else {
    echo 'Connection failed';
    
}
    
 
?>
