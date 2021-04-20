<?php
require_once 'db_connect.php';

if (isset($_POST["submit"])) { // if the input that has the type submit has a value (when clicked)
    $fname = $_POST["first_name"]; // takes the value from the input whose name attribute is equals to first_name using the $POST method
    $lname = $_POST["last_name"]; // takes the value from the input whose name attribute is equals to last_name

    $sql = "INSERT INTO test (first_name, last_name) VALUES ('$fname', '$lname')";
    // query that creates a new record in the table test. The values come from the form


    if (mysqli_query($connect, $sql) == true) { // if the query runs successfully it will show a message and a link to go back to the home page.
        echo  "New record created<br>
            <a href='index.php'>Home</a>";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
</head>

<body>
    <form method="post">
        <input type="text" name="first_name" placeholder="Type your first name">
        <input type="text" name="last_name" placeholder="Type your last name">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>