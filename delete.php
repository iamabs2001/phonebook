<?php
    
    $conn = new mysqli("localhost", "root", "123","phonebook");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_phone = $_GET['phone'];

    $my_query = "DELETE FROM contact WHERE phone=".$user_phone;

    if ($conn->query($my_query) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>