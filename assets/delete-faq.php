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
            
            echo '<script>';
            echo 'alert("FAQ Deleted!");';
            echo 'window.location.href="manage-faq.php"';
            echo '</script>';
            exit();
        }
    }