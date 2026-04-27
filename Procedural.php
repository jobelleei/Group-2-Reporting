<!DOCTYPE html>
<html>

<head>
    <title>Get last ID</title>
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
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //checking connection
    if (!$conn) {
        die("Connection failed! " . mysqli_connect_error());
    }

    //sql query to add data
    if (!empty($firstname) && !empty($lastname)) { //prevents empty insert
        $sql = "INSERT INTO Get_Last_ID (firstname, lastname) 
                VALUES ('$firstname', '$lastname')";

        //executing the sql query
        if (mysqli_query($conn, $sql)) {
            echo "<br>Last inserted ID: <span style='color: green; font-weight: bold'>" . mysqli_insert_id($conn) . "</span>";
        } else {
            die("Error: " . mysqli_error($conn));
        }
    }

    mysqli_close($conn); //closing the connection
    ?>

</body>

</html>