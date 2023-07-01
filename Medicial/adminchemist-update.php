<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <title>
        Medicines
    </title>
</head>

<body>

    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center;margin-top:30px;"></p>
        <a href="admindashboard.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>


    </div>

    <div class="topnav">
        <a href="logout.php">Logout</a>
    </div>

    <center>
        <div class="head" style="margin-top:100px;border-radius: 30px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> UPDATE CHEMIST DETAILS</h2>
        </div>
    </center>

    <div class="one" style="border-radius: 30px;margin-top: 50px; background-color: #217F7A">
        <div class="row">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="column">
                    <p>
                        <label for="id">ID:</label><br>
                        <input type="number" name="id" value="<?php echo $row[0]; ?>">
                    </p>
                    <p>
                        <label for="username">UserName:</label><br>
                        <input type="text" name="username" value="<?php echo $row[1]; ?>">
                    </p>
                    <p>
                        <label for="password">Password:</label><br>
                        <input type="text" name="password" value="<?php echo $row[2]; ?>">
                    </p>
                    <p>
                        <label for="f_name">First Name:</label><br>
                        <input type="text" name="f_name" value="<?php echo $row[3]; ?>">
                    </p>
                    <p>
                        <label for="l_name">Last Name:</label><br>
                        <input type="text" name="l_name" value="<?php echo $row[4]; ?>">
                    </p>
                </div>

                <div class="column">
                    <p>
                        <label for="photo">Photo: </label><br>
                        <input type="file" name="photo" value="<?php echo $row[5]; ?>">
                    </p>
                    <p>
                        <label for="b_date">BirthDate:</label><br>
                        <input type="date" name="b_date" value="<?php echo $row[6]; ?>">
                    </p>
                </div>

                <input type="submit" name="update" value="Update" style="border-radius: 15px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            </form>

            <?php

            include "config.php";

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $qry1 = "SELECT * FROM registration WHERE id='$id'";
                $result = $conn->query($qry1);
                $row = $result->fetch_column();
            }

            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fname = $_POST['f_name'];
                $lname = $_POST['l_name'];
                $photo = $_POST['photo'];
                $b_date = $_POST['b_date'];

                $sql = "UPDATE registration SET id='$id' ,username='$username' ,password='$password',f_name='$fname',l_name='$lname',photo='$photo',b_date='$b_date' where id='$id'"; 
                if ($conn->query($sql))
                    header("location:adminchemistview.php");
                else
                    echo "<p style='font-size:8; color:red;'>Error! Unable to update.</p>";
            }

            ?>
        </div>
    </div>

</body>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

</html>