<?php
$conn = new mysqli("localhost", "root", "", "adv_web");

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//updated version
// multipol insert
// FINAL UPDATE PUSH1
$sql = "INSERT INTO multiple (firstName, middleName, lastName, age)
VALUES 

('Dalzen', 'L.', 'Gwaopo', 20),
('Artot', 'B.', 'Smith', 22),
('Tata', 'C.', 'Lee', 19)";

if ($conn->query($sql) === TRUE) {
    echo "Multiple records inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
