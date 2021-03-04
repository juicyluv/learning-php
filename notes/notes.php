<?php
session_start();

// if user is not logged in, 
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header('location: login.php');
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>

<body>
    <h2>you logged as <?php echo $username ?> and your email is <?php echo $email ?></h2>
</body>

</html>