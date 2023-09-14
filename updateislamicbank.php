<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_id = $_POST ["accid"];
    $minimum_open = $_POST["mine"];
    $password = $_POST["Pass"];
    $user_num = $_POST["userN"];
   
    
// database column / tables the orginal name on column of a table
 //$insertQuery ="INSERT INTO islamic_bank_account(minimum_open,password,user_name,admin) VALUES ('$minimum_open','$password','$user_num','$admin_id');";
 $UpdateQuery = "UPDATE islamic_bank_account SET minimum_open=$minimum_open,password='$password',user_name='$user_num' WHERE account_id=$account_id ;";
}
// function for running on the server or database
$conn->exec($UpdateQuery);
echo "update successfully ";
