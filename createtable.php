<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE Mybook (
id INT , 
firstname VARCHAR(30) ,
lastname VARCHAR(30) ,
email VARCHAR(50)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table Mybook created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>