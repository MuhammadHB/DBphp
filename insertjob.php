<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST["jobid"];
    $job = $_POST["job"];

    
// database column / tables
    $insertQuery ="INSERT INTO user_job(job_id,job) VALUES ('$job_id','$job');";
}
// function for running on the server or database
$conn->exec($insertQuery);
echo "New record created successfully ";

 