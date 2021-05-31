<?php

    include('server.php');
    session_start();

    $stuid = $_SESSION['stuid'];

    date_default_timezone_set("Asia/Bangkok");

    $date = date("Y-m-d");
    $time = date("H:i:s");
    $type = "ลา";
    
    $sql = "INSERT INTO stucheck VALUES ('$stuid', '$date', '$time', '$type')";
    $result = mysqli_query($conn, $sql);
    $_SESSION['check2_success'] = "แจ้งลาเรียบร้อย";
    header("location: index.php");

?>