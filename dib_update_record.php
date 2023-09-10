<?php
    // Database connection details
    $servername = "localhost";  //:3306
    $username = "westends_admin";
    $password = "Nanana11!!";
    $dbname = "westends_DiB";
    
    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subscribed = $_POST['subscribed'];
    $unsubscribed = $_POST['unsubscribed'];
    
    // Insert data into the database
    $sql = "UPDATE users SET name='$name', email='$email', subscribed='$subscribed', unsubscribed='$unsubscribed' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
    
    $conn->close();
?>
