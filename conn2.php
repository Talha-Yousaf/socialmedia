<?php

//variables

$hostname = "mysqlserver01.mysql.database.azure.com";
$username = "Sohaib786";
$password = "F=sL6B\"p9,a>p't";
$dbname = "socialdb";

//connection

$conn = mysqli_connect($hostname, $username,$password, $dbname )
       or die("Not connected");

//query

$sql = "delete from users where username = 'sharjeel'";
 if (!mysqli_query($conn,$sql )) 
 {
    die("Error in delete query" .mysqli_error());
 } 
 echo  "Data has been deleted";     
 mysqli_close($conn)                    




?>