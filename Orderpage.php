<?php

include 'Connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'homeheader.php';?>
<h1 class="heading">My Orders</h1>

<?php
        $sql = "SELECT * FROM rent where email='" . $_SESSION['email'] . "'" ;
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo '<table class="list" border="1" width="100%">';
            echo "<tr>";
            echo "    <th>Order Id </th>\t";
            echo "    <th>Name</th>";
            echo "    <th>Number</th>";
            echo "    <th>Email</th>";
            echo "    <th>Mode</th>";
            echo "    <th>Flat</th>";
            echo "    <th>Street</th>";
            echo "    <th>City</th>";
            echo "    <th>State</th>";
            echo "    <th>Pincode</th>";
            echo "    <th>Total Product</th>";
            echo "    <th>Total Price</th>";
            echo "    <th>Rent_days</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo '    <td> ' . $row["id"] . '</td>';
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

</body>
<footerr> <?php include 'footerr.html';?> </footerr>
</html>