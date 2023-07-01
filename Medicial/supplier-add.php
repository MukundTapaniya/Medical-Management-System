<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <title>
        Suppliers
    </title>
</head>

<body>

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

        .sidenav {
            overflow: auto;
        }
    </style>
    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Medical Store Management System </h2>
        <p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center;margin-top:30px;"></p>
        <a href="adminmainpage.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>
        <div class="dropdown-container">

            <a href="inventory-add.php"><img src="./img/pill.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Medicine</a>
            <a href="inventory-view.php"><img src="./img/pill.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Medicine</a>
        </div>
        <button class="dropdown-btn">Suppliers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="supplier-add.php"><img src="./img/Supplier.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Supplier</a>
            <a href="supplier-view.php"><img src="./img/Supplier.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Suppliers</a>
        </div>
        <button class="dropdown-btn">Stock Purchase
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="purchase-add.php"><img src="./img/StorageBox.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Purchase</a>
            <a href="purchase-view.php"><img src="./img/StorageBox.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Purchases</a>
        </div>

        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="customer-add.php"><img src="./img/patient.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Add
                New Customer</a>
            <a href="customer-view.php"><img src="./img/patient.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Manage
                Customers</a>
        </div>
        <a href="sales-view.php"><img src="./img/invoice.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">View
            Sales Invoice Details</a>
        <a href="salesitems-view.php"><img src="./img/product.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">View
            Sold Products Details</a>
        <button class="dropdown-btn">Reports
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="stockreport.php"><img src="./img/lowstock.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Medicines
                - Low Stock</a>
            <a href="expiryreport.php"><img src="./img/expire.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Medicines
                - Soon to Expire</a>
            <a href="salesreport.php"><img src="./img/transactions.png" style="padding:1px;margin-left:5px;margin-top:12px;width:18px;height:18px;border:2px solid black;">Transactions
                Reports</a>
        </div>
    </div>

    <div class="topnav">
        <a href="logout.php">Logout</a>
    </div>

    <center>
        <div class="head" style="margin-top:100px;border-radius: 30px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> <u>ADD SUPPLIER DETAILS</u></h2>
        </div>
    </center>



    <div class="one row" style="border-radius: 30px;margin-top: 50px; background-color: #217F7A">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="column">
                <p>
                    <label for="sid">Supplier ID:</label><br>
                    <input type="number" name="sid">
                </p>
                <p>
                    <label for="sname">Supplier Company Name:</label><br>
                    <input type="text" name="sname">
                </p>
                <p>
                    <label for="sadd">Address:</label><br>
                    <input type="text" name="sadd">
                </p>


            </div>
            <div class="column">
                <p>
                    <label for="sphno">Phone Number:</label><br>
                    <input type="number" name="sphno">
                </p>

                <p>
                    <label for="smail">Email Address </label><br>
                    <input type="text" name="smail">
                </p>

            </div>


            <input type="submit" name="add" value="Add Supplier" style="border-radius: 15px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
        </form>
        <br>


        <?php
        include "config.php";

        if (isset($_POST['add'])) {
            $id = mysqli_real_escape_string($conn, $_REQUEST['sid']);
            $name = mysqli_real_escape_string($conn, $_REQUEST['sname']);
            $add = mysqli_real_escape_string($conn, $_REQUEST['sadd']);
            $phno = mysqli_real_escape_string($conn, $_REQUEST['sphno']);
            $mail = mysqli_real_escape_string($conn, $_REQUEST['smail']);


            $sql = "INSERT INTO suppliers VALUES ($id, '$name','$add',$phno, '$mail')";
            if (mysqli_query($conn, $sql)) {
                echo "<p style='font-size:8;'>Supplier details successfully added!</p>";
            } else {
                echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
            }
        }

        $conn->close();
        ?>

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