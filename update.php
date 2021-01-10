<?php

    $conn = new mysqli("localhost", "root", "123","phonebook");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "
    <form action='save_updates.php'>
        <input type='hidden' name='name'  value='".$_GET['name']."'><br>
        <input type='text' name='phone' value='".$_GET['phone']."'><br>
        <input type='submit'>
    </form>
    "

?>