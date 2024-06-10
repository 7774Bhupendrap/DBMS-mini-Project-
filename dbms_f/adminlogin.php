<?php
session_start();
 
include("connect.php");
include("function.php");
// $user_data = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // data has been entered
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password)  && !is_numeric($user_name))
    {
          // read to database
      
          $query = "SELECT * FROM admindata WHERE user_name = '$user_name' limit 1 ";
           $result = mysqli_query($con,$query);
           if($result){
            if( $result && mysqli_num_rows($result) > 0 )
            {
                $user_data = mysqli_fetch_assoc($result);
               if($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                
                 header("Location:display.php");
                 die;
               }
               else 
               {
                echo "INCORRECT USERNAME OR PASSWORD";
               }
            }
            else{
                echo "wrong username";
            }
           
           }
           else{
            echo "failed to connect";
           }
           
          
    }
    else
    {
        echo  " Enter valid information ";
    
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title> login page</title>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
<div class="wrapper">
    <form  method = "POST">
    <h1>Admin Login</h1>
    <div class="input">
        
        <input type="text" placeholder="Username" name = "username" required >
        <i class='bx bxs-user'></i>
    </div>
    <div class="input">
        <input type="password"  placeholder="Password" name="password" required >
        <i class='bx bxs-lock-alt' ></i> 
    </div>
        <div class="remember-forget">
        <label><input type="checkbox" > Remember me</label>
        <a href="forgotpassword.html">Forgot password?</a>
        </div>
        <button type="Submit" class="btn" > Login</button>
        <div class="register_link">
            <p>Do you have account? 
                <a href="register.php">Register</a></p>
        </div>
        
        
    </div>
           
</form>
</div>
</body>  
</html>

