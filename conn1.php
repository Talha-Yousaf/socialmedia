<?php
//declare varibales

$hostname = "mysqlserver01.mysql.database.azure.com";
$username = "Sohaib786";
$password = "F=sL6B\"p9,a>p't";
$dbname = "socialdb";

//connection to database

$conn = mysqli_connect($hostname,$username,$password,$dbname)
or die("Unable to connect");
echo "Database has been connected sucessfully";

// excecute query

$sql = mysqli_query($conn , "select * from users");

//fetch data

if (mysqli_num_rows($sql) > 0)
{
    while($row = mysqli_fetch_array($sql))
    {
     echo   "ID". $row['id'] . "<br>";
    }
    mysqli_close($conn);
}


?>
