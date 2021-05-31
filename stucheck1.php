<?php

    include('server.php');
    session_start();

    $stuid = $_SESSION['stuid'];

    date_default_timezone_set("Asia/Bangkok");

    $date = date("Y-m-d");
    $time = date("H:i:s");
    $late = "08:10";
    $start = "07:30";

    if ($time < $late && $time > $start)
    {
        $type = "เข้าเรียน";
    }
    else
    {
        $type = "สาย";
    }
    
    $sql = "INSERT INTO stucheck VALUES ('$stuid', '$date', '$time', '$type')";
    $result = mysqli_query($conn, $sql);
    $_SESSION['check1_success'] = "ลงชื่อเข้าเรียนเรียบร้อย";
    header("location: index.php");

?>