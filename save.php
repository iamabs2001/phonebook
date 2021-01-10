<?php

    $conn = new mysqli("localhost", "root", "123","phonebook");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $my_query = "insert into contact values('".$_GET['name']."','".$_GET['phone']."');";

    if (mysqli_query($conn,$my_query)) {
        header('Location: index.php');
    } else {
        echo "Error Saving contact: " .$conn->error;
    }

    $conn->close();

?>