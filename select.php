<?php
include_once('connect.php');
session_start();
if (isset($_SESSION['username'])) {
   $username=$_SESSION['username'];
    echo "<h2> welcome $username </h2>";
}
$sel="SELECT*FROM employees";
$query=mysqli_query($conn,$sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: bluesky;">
    <center><h2>EMPLOYEES MANAGEMENT SYSTEM</h2></center>
    
   <center>
   <a href="insert.php"><h4>ADD EMPLOYEE</h4> </a> &nbsp;&nbsp;&nbsp; <a href="logout.php"><h4>Logout</h4></a>
   <table border="1">
        <th>id</th>
        <th>employee_name</th>
        <th>email</th>
        <th>phone</th>
        <th>position</th>
        <th>adrress</th>
        <th>created_at</th>
        <th colspan="2">action</th>
        <?php
        while ($data=mysqli_fetch_array($query)) {
            echo"<tr>";
            echo"<td>".$data['id']."</td>";
            echo"<td>".$data['employee_name']."</td>";
            echo"<td>".$data['email']."</td>";
            echo"<td>".$data['phone']."</td>";
            echo"<td>".$data['position']."</td>";
            echo"<td>".$data['address']."</td>";
            echo"<td>".$data['created_at']."</td>";
            echo"<td> <a href='delete.php?id=".$data['id']."'>delete</a></td>";
            echo"<td> <a href='update.php?id=".$data['id']."'>update</a></td>";
        }
        
        ?>
    </table></center>
</body>
</html>