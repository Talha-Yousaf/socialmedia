<?php
//variables

$hostname = "mysqlserver01.mysql.database.azure.com";
$username = "Sohaib786";
$password = "F=sL6B\"p9,a>p't";
$dbname = "socialdb";

//connection

$conn = mysqli_connect($hostnamme,$username,$password,$dbname)
        or die("not able to connecr" .mysqli_error($conn));
echo "Connected successfully";

//query

$sql = mysqli_query($conn, "select username,password from users");

//fecth


?>