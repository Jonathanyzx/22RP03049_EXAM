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
        <input type="text" name="username"><br><br>
        <p>password</p>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="LOGIN">
        <a href="signup.php">Please signup</a>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sel="SELECT*FROM users WHERE username='$username' AND password='$password'";
    $query=mysqli_query($conn,$sel);
    if (mysqli_num_rows($query)) {
        while ($row=mysqli_fetch_assoc($query)) {
            $username=$row['username'];
            $password=$row['password'];
            session_start();
            $_SESSION['username']=$username;
        }
        header('location:select.php');
    }
    else
    {
        echo"Please signup";
    }
}

?>
