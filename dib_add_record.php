<?php
    // Database connection details
    $servername = "localhost";  //:3306
    $username = "westends_admin";
    $password = "Nanana11!!";
    $dbname = "westends_DiB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //$id = $_POST['newid'];
    $newname = $_POST['newname'];
    $newemail = $_POST['newemail'];
    $newsubscribed = $_POST['newsubscribed'];
    $newunsubscribed = $_POST['newunsubscribed'];
    
    $sql = "INSERT INTO users (id, name, email, subscribed, unsubscribed) VALUES (NULL, '$newname', '$newemail', '$newsubscribed', '$newunsubscribed')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
