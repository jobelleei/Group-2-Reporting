<?php
$conn = new mysqli("localhost", "root", "", "adv_web");

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// multipol insert
$sql = "INSERT INTO multiple (firstName, middleName, lastName, age)
VALUES 
('John', 'A.', 'Doe', 20),
('Jane', 'B.', 'Smith', 22),
('Mark', 'C.', 'Lee', 19)";

if ($conn->query($sql) === TRUE) {
    echo "Multiple records inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>