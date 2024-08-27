<?php
include_once('connect.php');
$id=$_GET['id'];
$del="DELETE FROM employees WHERE id='$id'";
$query=mysqli_query($conn,$del);
if ($query) {
header('location:select.php');
}
else
{
    echo"not deleted";
}
?>