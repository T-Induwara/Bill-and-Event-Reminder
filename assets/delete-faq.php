<?php
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $serverName = "TIMAXX-NITRO";
        $connectionOptions = array(
            "Database" => "RemindMeisterV2"
        );

        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        if (empty($errors)) {
            $sql = "DELETE FROM FAQ WHERE FAQ_ID = $id";
            $stmt = sqlsrv_query($conn, $sql);
            
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            
            // Data inserted successfully, redirect to a success page or perform any other necessary actions
            //echo "Bill reminder added successfully. <br> Please Log in now.";
            echo '<script>';
            echo 'window.location.href="manage-faq.php";';
            echo '</script>';
            exit();
        }
    }