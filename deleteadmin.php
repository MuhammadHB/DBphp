<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_id = $_POST ["adminid"];
// database column / tables
    $deletetQuery ="DELETE FROM admin WHERE admin_id = '$admin_id';";
}
// function for running on the server or database
$conn->exec($deletetQuery);
echo "delete successfully ";