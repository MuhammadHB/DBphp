<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $minimum_open = $_POST["mine"];
    $password = $_POST["Pass"];
    $user_num = $_POST["userN"];
    $admin_id = $_POST ["Admin"];
    
// database column / tables the orginal name on column of a table
 //$insertQuery ="INSERT INTO islamic_bank_account(minimum_open,password,user_name,admin) VALUES ('$minimum_open','$password','$user_num','$admin_id');";
 $insert = "INSERT INTO islamic_bank_account VALUES ('$minimum_open','$password','$user_num','$admin_id');";
}
// function for running on the server or database
//$conn->exec($insertQuery);
echo "New record created successfully ";
