<?php

    session_start();
    include('server.php');

    $errors = array();

    $time = date("H:i:s");
    $start = "07:30";
    $stop = "09:00";

    if ($time >= $start && $time < $stop)
    {
        if (isset($_POST['login_user']))
        {
            $stuid = mysqli_real_escape_string($conn, $_POST['stuid']);

            $query = "SELECT * FROM student WHERE stuid = '$stuid'";
            $result = mysqli_query($conn, $query);

            if (!$result)
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            if (mysqli_num_rows($result) == 1)
            {
                while($rows = mysqli_fetch_array($result))
                {
                    $_SESSION['stuid'] = $rows['stuid'];
                }
                $_SESSION['login_success'] = "You are now logged in";
                header('location: index.php');
            }
            else
            {
                array_push($errors, "Wrong student id combination");
                $_SESSION['error'] = "รหัสนักเรียนไม่ถูกต้อง กรุณาลองอีกครั้ง";
                header('location: login.php');
            }
        }
    }

    else
    {
        $_SESSION['timeerror'] = "นอกเหนือเวลาทำการ 07.30 - 9.00 น.";
        header('location: login.php');
    }

?>