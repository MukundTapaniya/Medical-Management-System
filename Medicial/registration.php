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
    <div class="login-box" style="margin-top: 70pxpx; overflow: auto;">
        <h2>Registration Form</h2>
        <form method="post">
            <div class="user-box">
                <input type="text" name="username" required="Must Filled" id="username">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="Must Filled" id="password">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="text" name="first_name" required="Must Filled" id="first_name">
                <label>Firstname</label>
            </div>
            <div class="user-box">
                <input type="text" name="last_name" required="Must Filled" id="last_name">
                <label>Lastname</label>
            </div>
            <div class="user-box">
                <input type="file" name="photo" placeholder="Choose photo" required="Must Filled" id="photo">
                <!-- <label>Photo:</label> -->
            </div>
            <div class="user-box">
                <input type="date" name="birthdate" required="Must Filled" id="birthdate">
                <!-- <label>BirthDate</label> -->
            </div>

            <div style="display:flex;">
                <button id="rsubmit" type="submit" name="rsubmit" value="Submit" class="btn btn-primary"
                    style="margin: 0px;">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Register
                </button>
                <a id="csubmit" type="submit" name="csubmit" value="Submit" href="mainpage.php"
                    style="margin: 0px; margin-left: 15px;">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Chemist Login
                </a>
            </div>
    </div>
    </form>

    <?php
        include "config.php";

        if (isset($_POST['rsubmit'])) {
            $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
            $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
            $first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
            $last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
            $photo = mysqli_real_escape_string($conn, $_REQUEST['photo']);
            $birthdate = mysqli_real_escape_string($conn, $_REQUEST['birthdate']);

            $sql = "INSERT INTO registration(username, password, f_name, l_name, photo, b_date) 
                        VALUES ('$username','$password','$first_name','$last_name','$photo','$birthdate')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Chemist registered successfully!');</script>";
            } else {
                echo "<script>alert('Error! Check details.');</script>";
            }
        }

        $conn->close();

        if (isset($_POST['rsubmit'])) {
            header("location:mainpage.php");
        }
       


        ?>

    </div>
    <div class=footer>
        <br>
        CopyRight. All Rights are reserved.
        <br><br>
    </div>

</body>

</html>