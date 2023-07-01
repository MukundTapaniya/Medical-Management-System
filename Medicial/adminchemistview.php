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

    <div class="topnav">
        <a href="logout.php">Logout (Logged in as <?php echo $uname;?>)</a>
    </div>

    <center>
        <div class="head" style="margin-top:100px;border-radius: 30px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> CHEMIST LIST</h2>
        </div>
    </center>


    <table align="right" id="table1" style="margin-right:100px;">
        <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Photo</th>
            <th>Birth date</th>
            <th>Action</th>

        </tr>
        <?php

        include "config.php";
        $sql = "SELECT id,username,password,f_name,l_name,photo,b_date FROM registration";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>" . $row["f_name"] . "</td>";
                echo "<td>" . $row["l_name"] . "</td>";
                echo "<td>" . $row["photo"] . "</td>";
                echo "<td>" . $row["b_date"] . "</td>";

                echo "<td align=center>";
                echo "<a class='button1 del-btn' href=adminchemist-delete.php?id=" . $row['id'] . ">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        $conn->close();
        ?>

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