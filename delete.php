<?php
require_once 'db_connect.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"]; // graphing the id value that is in the url

    $sql = "DELETE FROM test WHERE id = $id";
    if (mysqli_query($connect, $sql) == true) {
        echo "Record deleted <br>
        <a href='index.php'>Home</a>";
    }
}
