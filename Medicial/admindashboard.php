<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="table1.css">
    <title>
        Customers
    </title>
</head>

<body>

    <?php global $uname;
    $uname = $_GET['username'];
    ?>

    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center;margin-top:30px;"></p>
        <a href="admindashboard.php">Dashboard</a>
        <a href="adminchemistview.php">View Chemist</a>

    </div>

    <center>
        <div class="head" style="margin-top:100px;border-radius: 30px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> ADMIN DASHBOARD</h2>
        </div>
    </center>

    <style>
        img:hover {
            opacity: 0.5;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
        }
    </style>

    <a href="adminchemistview.php" title="View Chemist">
        <img src="./img/inventory.png"
            style="padding:8px;margin-left: 700px;margin-top:120px;width:200px;height:200px;border:2px solid black; box-shadow: 0 8px 25px 0 rgba(71, 43, 229, 0.2), 0 8px 25px 0 rgba(71, 43, 229, 0.2); border-radius: 25px;"
            alt="View Chemist">
    </a>



    <div class="topnav">
        <a href="logout.php">Logout(Logged in as <?php echo $uname;?>)</a>
    </div>


</body>

</html>