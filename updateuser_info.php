<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $passport_id = $_POST ["psid"];
    $first_n = $_POST["first_name"];
    $last_n = $_POST["last_name"];
    $date_birth = $_POST["datebirth"];
    $age = $_POST ["Age"];
    $phone_num = $_POST ["Phone"];
    $Email = $_POST ["email"];
// database column / tables
    $UpdateQuery ="UPDATE user_information SET first_name='$first_n',last_name='$last_n',date_birth='$date_birth',age=$age,phone_num='$phone_num',Email='$Email' WHERE passport_id=$passport_id ;";
}
// function for running on the server or database
$conn->exec($UpdateQuery);
echo "update successfully ";