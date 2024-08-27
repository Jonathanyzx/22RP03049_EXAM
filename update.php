<?php
include_once('connect.php');
// if (!isset($_SESSION['username'])) {
//     header('location:login.php');
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:gray">
    <h2>CHANGE EMPLOYEE REGISTRATION</h2>
    <a href="select.php"><h3>BACK HOME</h3></a>
    <?php
    $id=$_GET['id'];
    $sel="SELECT*FROM employees WHERE id='$id'";
    $query=mysqli_query($conn,$sel);
    while ($res=mysqli_fetch_assoc($query)) {
        $res['id'];

   
    
    ?>
    <form action="" method="post">
<p>employee_name</p>
<input type="text" name="employee_name" value=" <?php echo $res['employee_name']?>" required><br>
<p>email</p>
<input type="email" name="email" value=" <?php echo $res['email']?>" required><br>
<p>phone</p>
<input type="text" name="phone" value=" <?php echo $res['phone']?>" required><br>
<p>position</p>
<input type="text" name="position" value= "<?php echo $res['position']?> " required><br>
<p>address</p>
<input type="text" name="address" value="<?php echo $res['address']?>" required><br>

<input type="submit" name="submit"  value="CHANGE">

    </form>
    <?php
     }
    ?>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $employee_name=$_POST['employee_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $position=$_POST['position'];
    $address=$_POST['address'];
    $created_at=$_POST['created_at'];
    $id=$_GET['id'];
    $update="UPDATE employees SET employee_name='$employee_name',email='$email',phone='$phone',position='$position',address='$address' WHERE id='$id'";
    $query=mysqli_query($conn,$update);
    if ($query) {
        header('location:select.php');
    }

    else {
        echo"not updated";
    }
}

?>