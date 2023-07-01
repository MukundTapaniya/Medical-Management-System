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

    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center;margin-top:30px;"></p>
        <a href="adminmainpage.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="inventory-add.php">Add New Medicine</a>
            <a href="inventory-view.php">Manage Inventory</a>
        </div>
        <button class="dropdown-btn">Suppliers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="supplier-add.php">Add New Supplier</a>
            <a href="supplier-view.php">Manage Suppliers</a>
        </div>
        <button class="dropdown-btn">Stock Purchase
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="purchase-add.php">Add New Purchase</a>
            <a href="purchase-view.php">Manage Purchases</a>
        </div>


        <a href="sales-view.php">View Sales Invoice Details</a>
        <a href="salesitems-view.php">View Sold Products Details</a>
        <button class="dropdown-btn">Reports
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="stockreport.php">Medicines - Low Stock</a>
            <a href="expiryreport.php">Medicines - Soon to Expire</a>
            <a href="salesreport.php">Transactions Reports</a>
        </div>
    </div>

    <div class="topnav">
        <a href="logout.php">Logout</a>
    </div>

    <center>
        <div class="head">
            <h2> CHEMIST LIST</h2>
        </div>
    </center>


    <table align="right" id="table1" style="margin-right:100px;">
        <tr>
            <th>UserName</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Photo</th>
            <th>Birth date</th>

        </tr>
        <?php
	
	include "config.php";
	$sql = "SELECT username,password,f_name,l_name,photo,b_date FROM registration";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {

		echo "<tr>";
			echo "<td>" . $row["username"]. "</td>";
			echo "<td>" . $row["password"] . "</td>";
			echo "<td>" . $row["f_name"]. "</td>";
			echo "<td>" . $row["l_name"]. "</td>";
			echo "<td>" . $row["photo"] . "</td>";
			echo "<td>" . $row["b_date"]. "</td>";
			echo "<td align=center>";
				echo "<a class='button1 edit-btn' href=customer-update.php?id=".$row['username'].">Edit</a>";
				echo "<a class='button1 del-btn' href=customer-delete.php?id=".$row['password'].">Delete</a>";
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