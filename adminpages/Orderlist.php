<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterList</title>
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
  
</head>
<body>

<header class="header">
    <div class="flex">
      <img src="Logo.jpg" alt="" width="60px" height="65px">
        <a href="#" class="logo">Book engage</a>
        <nav class="navbar">
            <a href="admin2ndpage.php">Home</a>
            <a href="#">Order</a>
            <a href="registerlist.php">Register</a>
            <a href="adminproduct.php">Product</a>
            <a href="./adminlogin.php">Logout</a>
        </nav>
    </div>
</header>
    

<!------------------------------index--------------------------------------->
<div class="contain">
  <center><h1><u><b>Order List</b></u></h1></center>
</div>
<br>
<div>
  <?php
  include 'adminConnection.php';
  $sql = "SELECT * FROM rent";
  $result = $con->query($sql);
  if($result->num_rows>0) {
      echo '<table class="list" border="15" width="99%">';
      echo "<tr>";

      echo "    <th>Order Id </th>\t";
      echo "    <th>Name</th>";
      echo "    <th>Number</th>";
      echo "    <th>Email</th>";
      echo "    <th>Method</th>";
      echo "    <th>Flat</th>";
      echo "    <th>Street</th>";
      echo "    <th>City</th>";
      echo "    <th>State</th>";
      echo "    <th>Pincode</th>";
      echo "    <th>Total Product</th>";
      echo "    <th>Total Price</th>";
      echo "    <th>Rent_days</th>";
      echo "</tr>";

      while($row = $result->fetch_assoc()) {
          echo "<tr>";
                echo '    <td>' . $row["id"] . '</td>';
                echo '    <td>' . $row["name"] . '</td>';
                echo '    <td>' . $row["number"] . '</td>';
                echo '    <td>' . $row["email"] . '</td>';
                echo '    <td>' . $row["mode"] . '</td>';
                echo '    <td>' . $row["flat"] . '</td>';
                echo '    <td>' . $row["street"] . '</td>';
                echo '    <td>' . $row["city"] . '</td>';
                echo '    <td>' . $row["state"] . '</td>';
                echo '    <td>' . $row["pin_code"] . '</td>';
                echo '    <td>' . $row["total_products"] . '</td>';
                echo '    <td>' . $row["total_price"] . '</td>';
                echo '    <td>' . $row["Rent_days"] . '</td>';
          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "No data found";
  }
  $con->close();
  ?>
</div>

</body>
<footerr> <?php include 'adminfooterr.html';?> </footerr>
</html>