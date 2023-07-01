<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="./login1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<head>
    <div class="header">
        <h1>Medical Management System</h1>
        <p style="margin-top:-20px;margin-bottom: 30px;line-height:1;font-size:30px;"></p>
        <p style="margin-top:-20px;margin-bottom: 30px;line-height:1;font-size:20px;"></p>
    </div>
    <title>
        Medical Management System
    </title>
</head>

<body>
    <div class="login-box">
        <h2>Login for Chemist</h2>
        <form method="post">
            <div class="user-box">
                <input type="text" name="uname" required="Must Filled" id="uname">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="pwd" required="Must Filled" id="pwd">
                <label>Password</label>
            </div>
            <div style="display:flex;">
            <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-primary">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
            <a id="submit" type="submit" name="submit" value="Submit" id="rsubmit" href="registration.php" style="margin-left: 25px;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                For Registration
            </a><br><br>
            </div><br>
            <a id="psubmit" href="mainpage1.php" style="margin-left: 80px;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                For Admin Login
            </a>
        </form>
    </div>

    <?php

    include "config.php";

    if (isset($_POST['submit'])) {

        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $password = mysqli_real_escape_string($conn, $_POST['pwd']);

        if ($uname != "" && $password != "") {

            $sql = "SELECT * FROM registration WHERE username='$uname' AND password='$password'";
            $result = $conn->query($sql);
            $row = $result->fetch_row();
            if (!$row) {
                echo "<p style='color:red;'>Invalid username or password!</p>";
            } else {
                session_start();
                $_SESSION['user'] = $uname;
                header('location:adminmainpage.php?username=' . $uname);
            }
        }
    }

    ?>

    <div class=footer>
        <br>
        CopyRight. All Rights are reserved.
        <br><br>
    </div>

</body>

</html>