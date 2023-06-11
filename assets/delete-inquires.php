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
            $sql = "DELETE FROM Inquiry WHERE INQ_ID = $id";
            $stmt = sqlsrv_query($conn, $sql);
            
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            
            // Data inserted successfully, redirect to a success page or perform any other necessary actions
            //echo "Bill reminder added successfully. <br> Please Log in now.";
            echo '<script>';
            echo 'alert("Inquiry Deleted!");';
            echo 'window.location.href="view-inquires.php"';
            echo '</script>';
            exit();
        }
    }