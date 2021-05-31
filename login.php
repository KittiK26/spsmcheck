<?php

    session_start();
    include('server.php');
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>ระบบเช็คชื่อเข้าเรียนออนไลน์</title>
        <?php if (isset($_SESSION['msg'])) : ?>
            <script>
                alert("กรุณาลงชื่อเข้าใช้งาน");
            </script>
        <?php unset($_SESSION['msg']); ?>
        <?php endif ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <script>
                alert("รหัสนักเรียนไม่ถูกต้อง กรุณาลองอีกครั้ง");
            </script>
        <?php unset($_SESSION['msg']); ?>
        <?php endif ?>
        <?php if (isset($_SESSION['timeerror'])) : ?>
            <script>
                alert("นอกเหนือเวลาทำการ 07.30 - 9.00 น.");
            </script>
        <?php unset($_SESSION['msg']); ?>
        <?php endif ?>
    </head>

    <body>
        <div class="form">
            <form method="POST" action="logindb.php">
                <div class="header">
                    <h3 style="text-align: center;">ระบบเช็คชื่อเข้าเรียนออนไลน์</h3>
                    <h3 style="text-align: center;">เข้าสู่ระบบ</h3>
                </div>
                <div class="input-group">
                    <label for="stuid">รหัสนักเรียน</label>
                    <input type="text" name="stuid" required>
                </div>
                <div class="input-group">
                    <button type="submit" name="login_user" class="btn">เข้าสู่ระบบ</button>
                </div>
                <p><a href="teacher/login.php">สำหรับอาจารย์</a></p>
            </form>
        </div>
    </body>
</html>