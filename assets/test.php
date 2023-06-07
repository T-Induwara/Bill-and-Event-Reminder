<?php
$serverName = "TIMAXX-NITRO";

$connectionInfo = array( "Database"=>"RemindMeister");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connectiondsfa established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>