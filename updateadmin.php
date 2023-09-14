<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_id = $_POST["adminid"];
    $admin = $_POST["admin"];

    
// database column / tables
$UpdateQuery = "UPDATE admin SET admin='$admin' WHERE admin_id=$admin_id ;";
}
// function for running on the server or database
$conn->exec($UpdateQuery);
echo "update successfully ";
