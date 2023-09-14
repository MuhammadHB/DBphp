<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $passport_id = $_POST ["psid"];
// database column / tables
    $deletetQuery ="DELETE FROM user_information WHERE passport_id = '$passport_id';";
}
// function for running on the server or database
$conn->exec($deletetQuery);
echo "delete successfully ";