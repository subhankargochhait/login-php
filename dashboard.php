<?php

session_start();
if(!isset($_SESSION['un'])){
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['un']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>