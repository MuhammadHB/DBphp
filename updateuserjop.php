<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST["jobid"];
    $job = $_POST["job"];

    
// database column / tables
 $UpdateQuery ="UPDATE user_job SET job='$job' WHERE job_id=$job_id ;";
}
// function for running on the server or database
$conn->exec( $UpdateQuery);
echo "update successfully ";