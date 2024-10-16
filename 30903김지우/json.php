<?php
    header(header: "Content-Type: application/json; charset=utf-8");

    $name = $_POST['name'];
    $email = $_POST['email'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webcontent";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO member (name, email)
    VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
    echo "성공";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
