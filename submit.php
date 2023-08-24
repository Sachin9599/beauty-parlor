<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $databse ="sonu";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $databse);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `sonu` (`name`, `email`, `phone`, `message`, `dt`) VALUES ( '$name', '$email', '$phone', '$message', current_timestamp());";

    // Execute the query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        // Flag for successful insertion
        $insert = true;
        echo 1;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}


?>

