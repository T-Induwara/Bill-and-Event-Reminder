<?php
    session_start();

    if (!isset($_SESSION['Email'])) {
        header("Location: log-in.php"); // Redirect to login page if not loggedin
    }
    
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
            $sql = "DELETE FROM Created_Bill WHERE CB_ID = $id";
            $stmt = sqlsrv_query($conn, $sql);
            
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            
            
            echo 'window.location.href="view-reminders.php";';
            echo '</script>';
            exit();
        }
    }

    

?>
