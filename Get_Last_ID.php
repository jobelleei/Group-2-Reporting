<!DOCTYPE html>
<html>

<head>
    <title>Insert Data</title>
</head>

<body>

    <form method="POST">
        Firstname: <input type="text" name="firstname" required><br><br>
        Lastname: <input type="text" name="lastname" required><br><br>
        <input type="submit" value="Insert">
    </form>

    <?php 
$firstname = $_POST["firstname"] ?? "";
$lastname = $_POST["lastname"] ?? "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group2_reporting";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection
if ($conn->connect_error) {
    die("Connection failed! " . $conn->connect_error);
}

//sql query to add data
if (!empty($firstname) && !empty($lastname)) {
    $sql = "INSERT INTO Get_Last_ID (firstname, lastname) 
            VALUES ('$firstname', '$lastname')";

    //executing the sql query
    if ($conn->query($sql) === TRUE) {
        echo "<br>Last inserted ID: <span style='color: green; font-weight: bold'>" . $conn->insert_id . "</span>";
    } else {
        die("Error: " . $conn->error);
    }
}

    

$conn->close(); //closing the connection
?>

</body>

</html>