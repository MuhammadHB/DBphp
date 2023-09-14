<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST ["jobid"];
// database column / tables
    $deletetQuery ="DELETE FROM user_job WHERE job_id = '$job_id';";
}
// function for running on the server or database
$conn->exec($deletetQuery);
echo "delete successfully ";