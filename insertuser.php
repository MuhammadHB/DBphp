<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_n = $_POST["first_name"];
    $last_n = $_POST["last_name"];
    $date_birth = $_POST["datebirth"];
    $age = $_POST ["Age"];
    $phone_num = $_POST ["Phone"];
    $Email = $_POST ["email"];
    $account_id = $_POST ["Account"];
    $job_id = $_POST ["job"];
// database column / tables
    $insertQuery ="INSERT INTO user_information(first_name,last_name,date_birth,age,phone_num,Email,account_id,job) VALUES ('$first_n','$last_n','$date_birth','$age','$phone_num',' $Email','$account_id','$job_id');";
}
// function for running on the server or database
$conn->exec($insertQuery);
echo "New record created successfully ";