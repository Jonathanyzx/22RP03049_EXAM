<?php
include_once('connect.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: gray;">
    <a href="select.php"><h3>BACK HOME</h3></a>
    <form action="" method="post">
<p>employee_name</p>
<input type="text" name="employee_name"><br><br>
<p>email</p>
<input type="email" name="email" ><br><br>
<p>phone</p>
<input type="text" name="phone"><br><br>
<p>position</p>
<input type="text" name="position"><br><br>
<p>address</p>
<input type="text" name="address"><br><br>
<!-- <p>created_at</p>
<input type="date" name="created_at"><br><br> -->
<input type="submit" name="submit" value="ADD EMPLOYEE">

    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $employee_name=$_POST['employee_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $position=$_POST['position'];
    $address=$_POST['address'];
    

    $insert="INSERT INTO employees (employee_name,email,phone,position,address) VALUES('$employee_name','$email','$phone','$position','$address')";
    $query=mysqli_query($conn,$insert);

    if ($query) {
       header('location:select.php');
    }
    else {
        echo"not inserted";
    }
}

?>