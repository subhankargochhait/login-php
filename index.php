<?php
session_start();
$con=mysqli_connect("localhost","root","","11april");

if(isset($_POST['login'])){
    $e=$_POST['email'];
    $p=$_POST['pass'];
$sel="SELECT * FROM login WHERE email='$e' AND password='$p'";
$rs=$con->query($sel);
if($rs->num_rows>0){
    $row=$rs->fetch_assoc();
    $_SESSION['un']= $row['username'];
    header("location:dashboard.php");
}
else{
    echo "login failed";

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <div class="login">
      <form action="" method="post">
        <h1>LOG IN</h1>
        <label>EMAIL</label>
        <input type="email" name="email">
       
        <label>Password</label>
        <input type="password" name="pass">
        <button name="login">Submit</button>
        <div class="copy">
            This Page created By - Subhankar Guchhait
        </div>
      </form>
    </div>
    <a href="reg.php">SingUp Now</a>
</body>
</html>