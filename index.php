<a href="add.html"> add contact </a><br><br>

<?php
    
    $conn = new mysqli("localhost", "root", "123","phonebook");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $my_query = "select * from contact";

    $result = $conn->query($my_query);

    if ($result->num_rows > 0) {

        echo "<table border='1'> <tr> <th> Name </th> <th> Phone </th> <th> action </th> </tr>";

        while($row = $result->fetch_assoc()) {
          echo  
          "<tr>".
            "<td>" . $row["name"] . "</td>". 
            "<td>" . $row["phone"] . "</td>".
            "<td> <a href='update.php?name=".$row["name"]."&phone=".$row["phone"]."'>edit</a> <a href='delete.php?phone=".$row["phone"]."'>delete</a> </td>".
          "</tr>";
        }

        echo "</table>";

    } else {
        echo "0 contacts";
    }
    
    $conn->close();

?>