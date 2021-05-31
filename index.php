<?php

    include('server.php');
    session_start();

    if (!isset($_SESSION['stuid']))
    {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['stuid']);
        header('location: index.php');
    }

    $stuid = $_SESSION['stuid'];

    $sql = "SELECT * FROM student WHERE stuid = '$stuid'";
    $result = mysqli_query($conn, $sql);

    $i = 1;
    while ($data = mysqli_fetch_array($result))
    {
        $stuid = $data['stuid'];
        $name = $data['name'];
        $surname = $data['surname'];
        $grade = $data['grade'];
        $class = $data['class'];
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>ระบบเช็คชื่อเข้าเรียนออนไลน์</title>
        <?php if (isset($_SESSION['login_success'])) : ?>
            <script>
                alert("ลงชื่อเข้าใช้เรียบร้อย");
            </script>
        <?php unset($_SESSION['login_success']); ?>
        <?php endif ?>
        <?php if (isset($_SESSION['check1_success'])) : ?>
            <script>
                alert("ลงชื่อเข้าเรียนเรียบร้อย");
            </script>
        <?php unset($_SESSION['check1_success']); ?>
        <?php endif ?>
        <?php if (isset($_SESSION['check2_success'])) : ?>
            <script>
                alert("แจ้งลาเรียบร้อย");
            </script>
        <?php unset($_SESSION['check2_success']); ?>
        <?php endif ?>
    </head>

    <body>
        <div class="header">
            <h1>ระบบเช็คชื่อเข้าเรียนออนไลน์</h1>
        </div>
        <div class="menubar">
            <ul>
                <?php if (isset($_SESSION['stuid'])) : ?>
                <li><a href="index.php?logout='1'" style="color: red; float: right;"><p>ออกจากระบบ</p></a></li>
                <?php endif ?>
            </ul>
        </div>
        <div class="content">
            <h2 style="text-align: center;"><?php echo "$stuid $name $surname ม.$grade ห้อง$class"; ?></h2>
            <button><a href="stucheck1.php">เข้าเรียน</a></button>
            <button><a href="stucheck2.php">แจ้งลา</a></button>
        </div>
    </body>
</html>