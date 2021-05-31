<?php

    session_start();
    include('../server.php');

    $errors = array();

    if (isset($_POST['login_user']))
    {
        $tid = mysqli_real_escape_string($conn, $_POST['tid']);

        $query = "SELECT * FROM teacher WHERE tid = '$tid'";
        $result = mysqli_query($conn, $query);

        if (!$result)
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        if (mysqli_num_rows($result) == 1)
        {
            while($rows = mysqli_fetch_array($result))
            {
                $_SESSION['tid'] = $rows['tid'];
            }
            $_SESSION['login_success'] = "You are now logged in";
            header('location: index.php');
        }
        else
        {
            array_push($errors, "Wrong student id combination");
            $_SESSION['error'] = "Wrong student id, please try again";
            header('location: login.php');
        }
    }

?>