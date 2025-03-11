


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<!--
<div class="container1">
     <form action="">
             <input type="text" placeholder="Search books" name= "JAVA books">
             <button type="submit"><img src="search1.jpg"></button>
     </form>

</div>--->
   
<form method="post">
        <label> Search book</label>
        <input type="text" name="search">
        <input type="Submit" name="">
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host = localhost; dbname=CodeFlix", 'root','');

if (isset($_POST["submit"])) {
        $str = $_POST["search"];
        $sth = $con-> prepare("selrct * from 'search' where name = '$str' ");

        $sth-> setFetchMode(POD :: FETCH_OBJ);
        $sth-> execute();

        if($row = $sth->fetch())
        {
                ?>
                <br><br><br>
                <table>
                      <tr>
                         <th>Name</th>
                         <th>Author</th>
                      </tr>
                      <tr>
                          <td><?php echo $row->Name;?></td>
                          <td><?php echo $row->Author;?></td>
                      </tr>
                </table>
<?php
        }

           else{
                echo "Name does not exist";
           }

}

?>