<?php
include_once('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <p>username</p>
    <input type="text" name="username" ><br><br>
    <p>password</p>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="SIGNUP">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert="INSERT INTO users (username,password) VALUES ('$username','$password')";
    $query=mysqli_query($conn,$insert);
    if ($query) {
       header('location:login.php');
    }
    else {
        echo"not inserted";
    }
}
?>