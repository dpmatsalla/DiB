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
    
    $id = $_POST['id'];
    
    $sql = "DELETE FROM users WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
    
    $conn->close();
?>
