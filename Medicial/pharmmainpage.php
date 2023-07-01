<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="table1.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <title>
        Pharmacist Dashboard
    </title>
</head>
<style>
body {
    font-family: Arial;
}
</style>

<body>

    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center;margin-top:30px;"></p>
        <a href="pharmmainpage.php">Dashboard</a>

        <a href="pharm-inventory.php">View Chemist</a>
        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>

    </div>

    <?php
	
	include "config.php";
	session_start();
	
	$sql="SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
	$result=$conn->query($sql);
	$row=$result->fetch_row();
	
	$ename=$row[0];
		
	?>

    <div class="topnav">
        <a href="logout1.php">Logout(signed in as Admin <?php echo $_GET['username'] ?>)</a>
    </div>

    <center>
        <div class="head">
            <h2> Admin DASHBOARD </h2>
        </div>
    </center>


    <a href="pharm-inventory.php" title="View Chemist">
        <img src="inventory.png"
            style="padding:8px;margin-left:700px;margin-top:40px;width:200px;height:200px;border:2px solid black;"
            alt="Chemist">
    </a>

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