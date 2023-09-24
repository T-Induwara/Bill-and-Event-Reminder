<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: log-in.php"); // Redirect to login page if not loggedin
    }

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $con = new mysqli("localhost", "timax", "Masseffect34c1#@", "RemindMeister");

        // Check the connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        } else {
            //echo "Connection established.<br />";
        }

        $sql = "DELETE FROM Inquiry WHERE INQ_ID = $id";
        $stmt = mysqli_query($con, $sql);
        
        echo '<script>';
        echo 'alert("Inquiry Deleted!");';
        echo 'window.location.href="view-inquires.php"';
        echo '</script>';
        exit();
    }