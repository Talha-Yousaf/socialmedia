<?php
$hostname = "mysqlserver01.mysql.database.azure.com";
$username = "Sohaib786";
$password = "F=sL6B\"p9,a>p't";
$dbname = "socialdb";

// Connection to database
$conn = mysqli_connect($hostname, $username, $password, $dbname)
    or die("not Connected to database");
echo "Connected to database<br>";

// SQL query
$sql = mysqli_query($conn, "SELECT id, username FROM users");

// Fetch the data
if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) 
    {
        echo "ID: " . $row['id'] .
             ", Username: " . $row['username'] . "<br>";
    }
} else {
    echo "No records found";
}

mysqli_close($conn);
?>
