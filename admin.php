<!DOCTYPE html>
<html>
<head>
    <title>DiB Admin</title>
    <link rel="icon" href="images/dib3.PNG"/>
</head>
<body>
    <h2>Defence in Business -- Admin Page</a></h2>

    <?php
        // Database connection details
        $servername = "localhost";  //:3306
        $username = "westends_admin";
        $password = "Nanana11!!";
        $dbname = "westends_DiB";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Fetch records from the database
        $sql = "SELECT * FROM users ORDER BY id";  
        $result = $conn->query($sql);
        
        $emailList = [];

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Subscribed</th><th>Unsubscribed</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr data-id='" . $row['id'] . "'>";
                echo "<td><label style='display:inline-block;text-align:right;width:40px;'>".$row['id']."</label></td>";
                echo "<td><input type='text' name='name' size='20' value='".$row['name']."' oninput='this.style.backgroundColor=\"#FFCCCB\";'></td>";
                echo "<td><input type='email' name='email' size='30' value='".$row['email']."' oninput='this.style.backgroundColor=\"#FFCCCB\";'></td>";
                echo "<td><input type='text' name='subscribed' size='12' value='".$row['subscribed']."' oninput='this.style.backgroundColor=\"#FFCCCB\";'></td>";
                echo "<td><input type='text' name='unsubscribed' size='12' value='".$row['unsubscribed']."' oninput='this.style.backgroundColor=\"#FFCCCB\";'></td>";
                echo "<td><button class='save-btn'>Save</button></td>";
                echo "<td><button class='remove-btn'>Remove</button></td>";
                echo "</tr>";
                if ($row['unsubscribed'] == 0) { $emailList[] = $row['email']; }
            }
            echo "</table>";

            // Combine the email addresses into a semicolon-delimited string
            $emailListString = implode(";", $emailList);
        } else {
            echo "No records found.";
        }
    
        $conn->close();
    ?>

    <br>
    <form action="dib_add_record.php" method="post">
        <table><tr>
            <td><label style='display:inline-block;text-align:center;width:40px;'>ID</label></td>
            <td><input type="text" size="20" name="newname" placeholder="Name" oninput="this.style.backgroundColor='#FFCCCB';"></td>
            <td><input type="email" size="30" name="newemail" placeholder="Email" oninput="this.style.backgroundColor='#FFCCCB';" required></td>
            <td><input type="text" size="12" name="newsubscribed" value="<?php echo date('YmdHis', strtotime('now')); ?>" oninput="this.style.backgroundColor='#FFCCCB';"></td>
            <td><input type="text" size="12" name="newunsubscribed" placeholder="Unsubscribed date" oninput="this.style.backgroundColor='#FFCCCB';"></td>
            <td><button type="submit">Add Record</button></td>
        </tr></table>
    </form>
    <br>
    <table><tr>
        <td><button onclick="copy()">Copy</button></td>
        <td> Then paste into email from info@defenceinbusiness.com</td>
        <td><form method="post"><input type="submit" name="generate_list" value="Update Email List"></form></td>
    </tr></table>
    <textarea id="emailList" rows="10" cols="50"></textarea>

    <?php
            // Output the email list to the textarea
            echo "<script>document.getElementById('emailList').value = '" . $emailListString . "';</script>";
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function copy() {
            document.getElementById("emailList").select();
            document.execCommand("copy");
        }

        $(document).ready(function () {
            // Handle Save button click
            $("table").on("click", ".save-btn", function () {
                var row = $(this).closest("tr");
                var name = row.find("input[name='name']").val();
                var email = row.find("input[name='email']").val();
                var subscribed = row.find("input[name='subscribed']").val();
                var unsubscribed = row.find("input[name='unsubscribed']").val();
                var id = row.attr("data-id");
    
                $.post("dib_update_record.php", {
                    id: id,
                    name: name,
                    email: email,
                    subscribed: subscribed,
                    unsubscribed: unsubscribed
                }, function (data) {
                    if (data === "success") {
                        row.find("input[name='name']").css("background-color", "transparent");
                        row.find("input[name='email']").css("background-color", "transparent");
                        row.find("input[name='subscribed']").css("background-color", "transparent");
                        row.find("input[name='unsubscribed']").css("background-color", "transparent");
                        //alert("Record " + id + " updated successfully.");
                    } else {
                        alert("Failed to update record " + id + ".");
                    }
                });
            });
    
            // Handle Remove button click
            $("table").on("click", ".remove-btn", function () {
                var row = $(this).closest("tr");
                var id = row.attr("data-id");
    
                $.post("dib_remove_record.php", { id: id }, function (data) {
                    if (data === "success") {
                        row.remove();
                        //alert("Record " + id + " removed successfully.");
                    } else {
                        alert("Failed to remove record " + id + ".");
                    }
                });
            });
        });

    </script>

    <h2><a href="index.php">Back to defenceinbusiness.com</a></h2>

</body>
</html>
