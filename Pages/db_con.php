<?php
    $my_server = "localhost";
    $my_username = "root";
    $my_password = "";
    $my_db = "finaldb";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = mysqli_connect($my_server,$my_username, $my_password,$my_db);

    if(!$conn){
        die("Connection Failed:". $conn->connect_error);
    }

?>