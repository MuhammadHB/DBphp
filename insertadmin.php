<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_id = $_POST["adminid"];
    $admin = $_POST["admin"];

    
// database column / tables
    $insertQuery ="INSERT INTO admin(admin_id,admin) VALUES ('$admin_id','$admin');";
}
// function for running on the server or database
$conn->exec($insertQuery);
echo "New record created successfully ";


