<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    
    $name = $_POST["listname"];
    $email = $_POST["listemail"];

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, subscribed) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {

        // Email details
        $to = $email;
        $subject = "Welcome to Defence in Business Mailing List";
        $message = "Hello $name,\n\nWelcome to Defence in Business Mailing List.  We will keep you posted about our events and opportunities.\n\nIf at anytime you'd like to update your email address or be removed from this list, then please contact us at info@defenceinbusiness.com.";
        $headers = "From: info@defenceinbusiness.com";
    
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "<b>Thank you for signing up!</b>\n\nWe have sent you a welcome email from info@defenceinbusiness.com.<br>Ensure to check your junk mail and add to your safe senders list.<br>";
        } else {
            echo "Error sending test email.";
        }

    } else {
        echo "There was a problem including the name into our list.<br>";
    }
    echo "<a href='https://westendspearers.com.au/dib/'>Back to DiB</a>";

    // Close the database connection
    $stmt->close();
    $conn->close();

}
?>
