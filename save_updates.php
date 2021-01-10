<?php

    $conn = new mysqli("localhost", "root", "123","phonebook");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $my_query = "update contact set phone='".$_GET['phone']."' where name='".$_GET['name']."' ;";

    if (mysqli_query($conn,$my_query)) {
        header('Location: index.php');
    } else {
        echo "Error Saving contact: " .$conn->error;
    }

    $conn->close();

?>