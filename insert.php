<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "smitaDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Student (name, rollno, email, course, mobile)
VALUES ('John', '111', 'john@example.com', 'MCA', '123456')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
