<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <title>
        Customers
    </title>
</head>

<body>

    <style>
        .sidenav {
            overflow: auto;
        }

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
        <a href="./about.html">About Us</a>
        <a href="./service.html">Services</a>
        <a href="./home.html">Home</a>
    </div>

    <center>
        <div class="head" style="margin-top:100px;border-radius: 30px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> <u>ADD CUSTOMER DETAILS</u></h2>
        </div>
    </center>

    <br><br><br><br><br><br><br><br>

    <div class="one" style="border-radius: 30px;margin-top: 50px; background-color: #217F7A;padding-left: 80px; margin-right:58px;margin:50px">
        <div class="row">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="column">
                    <p>
                        <label for="cid">Customer ID:</label><br>
                        <input type="number" name="cid">
                    </p>
                    <p>
                        <label for="cfname">First Name:</label><br>
                        <input type="text" name="cfname">
                    </p>
                    <p>
                        <label for="clname">Last Name:</label><br>
                        <input type="text" name="clname">
                    </p>
                    <p>
                        <label for="age">Age:</label><br>
                        <input type="number" name="age">
                    </p>

                    <p>
                        <label for="sex">Sex: </label><br>
                        <select id="sex" name="sex">
                            <option value="selected">Select</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Others</option>
                        </select>
                    </p>

                </div>
                <div class="column">

                    <p>
                        <label for="phno">Phone Number: </label><br>
                        <input type="text" name="phno">
                    </p>
                    <p>
                        <label for="emid">Email ID:</label><br>
                        <input type="text" name="emid">
                    </p>
                </div>


                <input type="submit" name="add" value="Add Customer" style="border-radius: 15px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            </form>
            <br>


            <?php
            include "config.php";

            if (isset($_POST['add'])) {
                $id = mysqli_real_escape_string($conn, $_REQUEST['cid']);
                $fname = mysqli_real_escape_string($conn, $_REQUEST['cfname']);
                $lname = mysqli_real_escape_string($conn, $_REQUEST['clname']);
                $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
                $sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
                $phno = mysqli_real_escape_string($conn, $_REQUEST['phno']);
                $mail = mysqli_real_escape_string($conn, $_REQUEST['emid']);


                $sql = "INSERT INTO customer VALUES ($id, '$fname', '$lname',$age,'$sex',$phno, '$mail')";
                if (mysqli_query($conn, $sql)) {
                    echo "<p style='font-size:8;'>Customer successfully added!</p>";
                } else {
                    echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
                }
            }

            $conn->close();
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