<?php

$conn = new mysqli("localhost", "root", "123","abhijeet");

$username = $_POST['uname'];
$password = $_POST['pwd'];

$login_check_query = "select * from user where name='".$username."' && pass='".$password."';";

$result = $conn->query($login_check_query);

if ($result->num_rows > 0) {        
    echo "sucess";
} else {
    echo "failed";
}

?>