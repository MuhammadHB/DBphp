<?php
// include the connection file
require 'connection.php';
// store insert SQL query into a variable
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_id = $_POST ["accid"];
// database column / tables
    $deletetQuery ="DELETE FROM islamic_bank_account WHERE account_id = '$account_id';";
}
// function for running on the server or database
$conn->exec($deletetQuery);
echo "delete successfully ";