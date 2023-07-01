<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry1 = "SELECT * FROM meds WHERE med_id='$id'";
    $result = $conn->query($qry1);
    $row = $result->fetch_row();
}
if (isset($_POST['update'])) {
    if (isset($_POST['medname']) || isset($_POST['qty']) || isset($_POST['cat']) || isset($_POST['sp']) || isset($_POST['loc'])) {
        $id = $_POST['medid'];
        $name = $_POST['medname'];
        $qty = $_POST['qty'];
        $cat = $_POST['cat'];
        $price = $_POST['sp'];
        $lcn = $_POST['loc'];


        $sql = "UPDATE meds SET med_name='$name',med_qty='$qty',category='$cat',med_price='$price',location_rack='$lcn' where med_id='$id'";
        if ($conn->query($sql))
            header("location:inventory-view.php");
    }
}
?>

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

        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="customer-add.php">Add New Customer</a>
            <a href="customer-view.php">Manage Customers</a>
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
        <div class="head" style="margin-top:100px;border-radius: 30px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> UPDATE MEDICINE DETAILS</h2>
        </div>
    </center>

    <div class="one" style="border-radius: 30px;margin-top: 50px; background-color: #217F7A">
        <div class="row">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="column">
                    <p>
                        <label for="medid">Medicine ID:</label><br>
                        <input type="number" name="medid" value="<?php echo $row[0]; ?>" readonly>
                    </p>
                    <p>
                        <label for="medname">Medicine Name:</label><br>
                        <input type="text" name="medname" value="<?php echo $row[1]; ?>">
                    </p>
                    <p>
                        <label for="qty">Quantity:</label><br>
                        <input type="number" name="qty" value="<?php echo $row[2]; ?>">
                    </p>
                    <p>
                        <label for="cat">Category:</label><br>
                        <input type="text" name="cat" value="<?php echo $row[3]; ?>">
                    </p>
                </div>

                <div class="column">
                    <p>
                        <label for="sp">Price: </label><br>
                        <input type="number" step="0.01" name="sp" value="<?php echo $row[4]; ?>">
                    </p>
                    <p>
                        <label for="loc">Location:</label><br>
                        <input type="text" name="loc" value="<?php echo $row[5]; ?>">
                    </p>
                </div>

                <input type="submit" name="update" value="Update" style="border-radius: 15px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            </form>
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