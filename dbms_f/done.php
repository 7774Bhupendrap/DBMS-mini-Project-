
<?php
session_start();
include("connect.php");
include("function.php");
// $query = "SELECT * FROM blooddonor WHERE user_name = '$user_name' limit 1 ";
// $result = mysqli_query($con,$query);
// $user_data = mysqli_fetch_assoc($result);
$user_data = check_login($con);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="container">
        <h2>Congratulations!</h2>
        <p><?php echo $user_data['name'] ?> ,have successfully registered.</p>
        <p>Please proceed to the <a href="login.php">login page</a> to access your account.</p>
    </div>
</body>
</html>
