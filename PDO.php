<!DOCTYPE html>
<html>

<head>
    <title>Get Last ID</title>
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

    try {
        //create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        //set error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //sql query to add data
        if (!empty($firstname) && !empty($lastname)) {
            $sql = "INSERT INTO Get_Last_ID (firstname, lastname) 
                    VALUES ('$firstname', '$lastname')";

            //executing the sql query
            $conn->exec($sql);

            echo "<br>Last inserted ID: <span style='color: green; font-weight: bold'>" . $conn->lastInsertId() . "</span>";
        }

    } catch(PDOException $e) {
        die("Connection failed! " . $e->getMessage());
    }
    ?>

</body>

</html>