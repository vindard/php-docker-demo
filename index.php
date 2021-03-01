<html>

<head>
    <title>Hello World Page</title>
</head>

<body>
    <?php echo'<p>Hello World</p>';?>

    <?php
        $servername = "database";
        $username = $_ENV["MYSQL_USER"];
        $password = $_ENV["MYSQL_PASSWORD"];

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    ?>
</body>

</html>