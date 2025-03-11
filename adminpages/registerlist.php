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
            <a href="Orderlist.php">Order</a>
            <a href="registerlist.php">Register</a>
            <a href="adminproduct.php">Product</a>
            <a href="./adminlogin.php">Logout</a>
        </nav>
    </div>
</header>

<!------------------------------index--------------------------------------->
<div class="contain">
  <center><h1><u><b>User Register List</b></u></h1></center>
</div>
<br>
<div>
  <?php
  include 'adminConnection.php';
  $sql = "SELECT * FROM register";
  $result = $con->query($sql);
  if($result->num_rows>0) {
      echo '<table class="list" border="4" width="99%">';
      echo "<tr>";
      
      echo "   <th>Id</th>";
      echo "   <th>Username</th>";
      echo "   <th>Email</th>";
      echo "   <th>Date of Birth</th>";

      echo "</tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo '  <td>' .$row["id"] . '</td>';
          echo '  <td>' .$row["username"] . '</td>';
          echo '  <td>' .$row["email"] . '</td>';
          echo '  <td>' .$row["dob"] . '</td>';

          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "No data found";
  }
  $con->close();
  ?>
</div>



<!------------------------------------User List----------------------------------------------->
<div class="contain">
  <center><h1><u><b>Admin Register List</b></u></h1></center>
</div>
<br>
<div>
  <?php
  include 'adminConnection.php';
  $sql = "SELECT * FROM adminregister";
  $result = $con->query($sql);
  if($result->num_rows>0) {
      echo '<table class="list" border="4" width="99%">';
      echo "<tr>";
      
      echo "   <th>Id</th>";
      echo "   <th>Username</th>";
      echo "   <th>Email</th>";
      echo "   <th>Date of Birth</th>";

      echo "</tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo '  <td>' .$row["A_ID"] . '</td>';
          echo '  <td>' .$row["name"] . '</td>';
          echo '  <td>' .$row["email"] . '</td>';
          echo '  <td>' .$row["dob"] . '</td>';

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