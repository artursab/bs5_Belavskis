<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "MyDataBase40";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
 die ("Savienojuma kļūda: ".$conn->connect_error);
 }else{
 echo "Savienojums ir izveidots";
 }
?>
