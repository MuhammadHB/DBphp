<?php

require_once('connection.php');
require_once('TRClass.php');


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-dark">
<body background=
"https://th.bing.com/th/id/R.92965c7fe7e611f2b8b23f2efb87d1dd?rik=t8stP4UdtAAksA&riu=http%3a%2f%2f2.bp.blogspot.com%2f-1UiYfTDMgcU%2fTuRSYYa0ARI%2fAAAAAAAAFPI%2fSlVFUCR6-C8%2fs1920%2fhd-green-background.jpg&ehk=tx7kQ1nDjlyZu6FZ93ULPqRgps88JkVnAZ%2briJ6bKMo%3d&risl=&pid=ImgRaw&r=0">
</body>
    <div class="container">
        <div class="row mt-7">
            <div class="col">
                <div class="card mt-7">
                    <div class="card-header">
                        <h2 class="display-6 text-center" cal_days_in_month>Showing information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>admin_id</td>
                                <td>admin</td>

                                
                            </tr>

                            <?php
                            /*if ($result) {

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $passport_id = $row['passport_id'];
                                    $first_name = $row['first_name'];
                                    $last_Name = $row['last_Name'];
                                    $date_birth = $row['date_birth'];
                                    $age = $row['age'];
                                    $phone_num = $row['phone_num'];
                                    $Email = $row['Email'];
                                    $account_id = $row['account_id'];
                                    $job = $row['job'];

                                    echo '<tr>
                                    <th scope="row">' .$passport_id . '</th>
                                    <td>' . $first_name . '</td>
                                    <td>' . $last_Name . '</td>
                                    <td>' . $date_birth. '</td>
                                    <td>' . $age . '</td>
                                    <td>' . $phone_num . '</td>
                                    <td>' . $Email . '</td>
                                    <td>' . $account_id . '</td>
                                    <td>' . $job . '</td>
                                    <td>
        
                                    
                                    </tr>';
                                }
                            }
*/
                        try {
                            /*$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            */$showquery = $conn->prepare("SELECT * from admin");
                            $showquery->execute();
                            /*$showquery = "SELECT * from user_information;";
                            $result = $conn->exec($showquery);
                        */
                            // set the resulting array to associative
                            $query = $showquery->setFetchMode(PDO::FETCH_ASSOC);
                            foreach(new TableRows(new RecursiveArrayIterator($showquery->fetchAll())) as $k=>$v) {
                            echo $v;
                            }
                        } catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                        $conn = null;
                        echo "</table>";
  ?>