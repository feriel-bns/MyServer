<?php

require_once 'conn.php';
$user_name =$_GET['username'] ; //$valeur_pseudo = $_POST['pseudo'];// des variales perso = des varaible de base de donner                                        // $valeur_password = $_POST['password'];
$user_pass = $_GET['password'];
$mysql_query = "select username,password from compte where login like '$user_name' and  motdepasse like '$user_pass';";
$result = mysqli_query($conn, $mysql_query);


if (mysqli_num_rows($result) > 0) {
    echo 'Login success';
} else {
    echo 'Login not success';
}
?>
