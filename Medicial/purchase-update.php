<?php
		include "config.php";
	
		if(isset($_GET['pid']))
		{
			$pid=$_GET['pid'];
		
			$qry1="SELECT * FROM purchase WHERE p_id='$pid'";
			$result = $conn->query($qry1);
			$row = $result -> fetch_row();
		}
		
		 if( isset($_POST['update']))
		 {
			$pid=$_POST['pid'];
			$sid=$_POST['sid'];
			$mid=$_POST['mid'];
			$qty = $_POST['pqty'];
			$cost = $_POST['pcost'];
			$pdate = $_POST['pdate'];
			$mdate = $_POST['mdate'];
			$edate = $_POST['edate'];
			 
		$sql="UPDATE purchase SET p_cost='$cost',p_qty='$qty',pur_date='$pdate',mfg_date='$mdate',exp_date='$edate' 
				where p_id='$pid'";
		if ($conn->query($sql))
		header("location:purchase-view.php");

		 }

         if( isset($_POST['update']))
		 {
			$pid=$_POST['pid'];
			$sid=$_POST['sid'];
			$mid=$_POST['mid'];
			$qty = $_POST['pqty'];
			$cost = $_POST['pcost'];
			$pdate = $_POST['pdate'];
			$mdate = $_POST['mdate'];
			$edate = $_POST['edate'];
			
			$sql="UPDATE purchase SET p_cost='$cost',p_qty='$qty',pur_date='$pdate',mfg_date='$mdate',exp_date='$edate' 
				where p_id='$pid'";
			if (!($conn->query($sql)))
				echo "<p style='font-size:8; color:red;'>Error! Unable to update.</p>";
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
        Purchases
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
            <a href="purchase-add.php">Add New Customer</a>
            <a href="purchase-view.php">Manage Customers</a>
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
        <div class="head" style="margin-top:100px;border-radius: 15px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            <h2> UPDATE PURCHASE DETAILS</h2>
        </div>
    </center>


    <div class="one" style="border-radius: 30px;margin-top: 50px; background-color: #217F7A;padding-left: 80px; margin-right:58px;margin:50px">
        <div class="row">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <div class="column">
                    <p>
                        <label for="pid">Purchase ID:</label><br>
                        <input type="number" name="pid" value="<?php echo $row[0]; ?>" readonly>
                    </p>
                    <p>
                        <label for="sid">Supplier ID:</label><br>
                        <input type="number" name="sid" value="<?php echo $row[1]; ?>" readonly>
                    </p>
                    <p>
                        <label for="mid">Medicine ID:</label><br>
                        <input type="number" name="mid" value="<?php echo $row[2]; ?>" readonly>
                    </p>
                    <p>
                        <label for="pqty">Purchase Quantity:</label><br>
                        <input type="number" name="pqty" value="<?php echo $row[3]; ?>">
                    </p>
                </div>

                <div class="column">
                    <p>
                        <label for="pcost">Purchase Cost:</label><br>
                        <input type="number" step="0.01" name="pcost" value="<?php echo $row[4]; ?>">
                    </p>


                    <p>
                        <label for="pdate">Date of Purchase:</label><br>
                        <input type="date" name="pdate" value="<?php echo $row[5]; ?>">
                    </p>
                    <p>
                        <label for="mdate">Manufacturing Date:</label><br>
                        <input type="date" name="mdate" value="<?php echo $row[6]; ?>">
                    </p>
                    <p>
                        <label for="edate">Expiry Date:</label><br>
                        <input type="date" name="edate" value="<?php echo $row[7]; ?>">
                    </p>
                </div>

                <input type="submit" name="update" value="Update" style="border-radius: 15px;background:linear-gradient(#141e30, #243b55);color: white;box-shadow: 0 15px 25px rgba(7, 205, 240, 0.6);">
            </form>
        </div>
    </div>

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