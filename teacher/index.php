<?php

    include('../server.php');
    session_start();

    if (!isset($_SESSION['tid']))
    {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['tid']);
        header('location: index.php');
    }

    $tid = $_SESSION['tid'];

    $sql = "SELECT * FROM teacher WHERE tid = '$tid'";
    $result = mysqli_query($conn, $sql);

    $i = 1;
    while ($data = mysqli_fetch_array($result))
    {
        $tid = $data['tid'];
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
        <link rel="stylesheet" href="../style.css">
        <title>ระบบเช็คชื่อเข้าเรียนออนไลน์</title>
        <?php if (isset($_SESSION['login_success'])) : ?>
            <script>
                alert("ลงชื่อเข้าใช้เรียบร้อย");
            </script>
        <?php unset($_SESSION['login_success']); ?>
        <?php endif ?>
    </head>

    <body>
        <div class="header">
            <h1>ระบบเช็คชื่อเข้าเรียนออนไลน์</h1>
        </div>
        <div class="menubar">
            <ul>
                <?php if (isset($_SESSION['tid'])) : ?>
                <li><a href="index.php?logout='1'" style="color: red; float: right;"><p>ออกจากระบบ</p></a></li>
                <?php endif ?>
            </ul>
        </div>
        <div class="content">
            <h2 style="text-align: center;"><?php echo "$tid $name $surname อาจารย์ประจำชั้น ม.$grade ห้อง$class"; ?></h2>
        </div>
        <table style="text-align: center; border: 1px solid black;">
            <tr style="border: 1px solid black;">
                <th style="border: 1px solid black;">ลำดับที่</th>
                <th style="border: 1px solid black;">เลขประจำตัว</th>
                <th style="border: 1px solid black;">ชื่อ</th>
                <th style="border: 1px solid black;">นามสกุล</th>
                <th style="border: 1px solid black;">วันที่</th>
                <th style="border: 1px solid black;">เวลา</th>
                <th style="border: 1px solid black;">ประเภท</th>
            </tr>
            <?php

                    $date = date("Y-m-d");
                    $sql = "SELECT * FROM stucheck
                            JOIN student ON stucheck.stuid = student.stuid
                            WHERE date = '$date'
                            ORDER BY stucheck.stuid ASC";
                    $result = mysqli_query($conn, $sql);
                    $i=1;
                    while($data = mysqli_fetch_array($result))
                    {

            ?>
                <tr style="border: 1px solid black;">
                    <td style="border: 1px solid black;"><?php echo $i ?></td>
                    <td style="border: 1px solid black;"><?php echo $data['stuid'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $data['name'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $data['surname'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $data['date'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $data['time'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $data['type'] ?></td>
                </tr>
                <?php

                    $i++;
                    }

                ?>
        </table>
    </body>
</html>