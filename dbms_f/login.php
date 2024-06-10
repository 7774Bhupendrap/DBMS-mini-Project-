<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
session_start();
 
include("connect.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // data has been entered
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    
    if(!empty($user_name) && !empty($password)  && !is_numeric($user_name))
    {
          // read to database
      
          $query = "SELECT * FROM blooddonor WHERE user_name = '$user_name' limit 1 ";
           $result = mysqli_query($con,$query);
           
           if($result){
            if( $result && mysqli_num_rows($result) > 0 )
            { 
                $user_data = mysqli_fetch_assoc($result);
              
            //    echo var_dump($user_data['pass'])."<br>";
            //    echo gettype($password)."<br>";
               if($user_data['pass'] === $password) {
               
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location:  profile.php");
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
            echo "failed to connect" . mysqli_error($con);
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
    <form  method = "POST"  >
    <h1>Login</h1>
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
        <a href="forgotpassword.php">Forgot password?</a>
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

