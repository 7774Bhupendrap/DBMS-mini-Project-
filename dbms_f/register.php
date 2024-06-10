<?php
session_start();
 
include("connect.php");
include("function.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // data has been entered
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];   
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $bld_grp = $_POST['bld_grp'];
    $month = $_POST['month'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];



    if(!empty($user_name) && !empty($password)  && !is_numeric($user_name))
    {
          // save to database
          $user_id = random_num(20);
          $query = "INSERT INTO blooddonor(user_id,name,age,gender,weight,bldgrp,months,email,mobile,user_name,pass) VALUES('$user_id','$name','$age','$gender','$weight','$bld_grp','$month','$email','$phone_no','$user_name','$password')";
       
          mysqli_query($con,$query);
          
          header("Location:  login.php");
          die;
    }
    else
    {
        echo  " Enter valid information ";
    
    }
}


?>





<html>
    <head>
        <title>
            Registration form

        </title>
        <link rel="stylesheet"  href="style1.css" >
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="wrapper">
            <form method="POST">
               <h1>  Registration</h1>
               <div class="input">
                <input type="text"  placeholder="Name" name="name" >
                
            </div>
            <div class="input">
                <input type="number"  placeholder="Age" name="age" >
                
            </div>
              
            <div class="input">
                <input type="text"  placeholder="Gender" name="gender" >
                
            </div>
            <div class="input">
                <input type="number"  placeholder="Weight" name="weight" >
                
            </div>
            <div class="input">
                <input type="text"  placeholder="Blood grp" name="bld_grp" >
                <box-icon name='donate-blood' type='solid' ></box-icon>
            </div>
            <div class="input">
                <input type="number"  placeholder="Months after blood donation" name="month" >
                <box-icon name='donate-blood' type='solid' ></box-icon>
            </div>
            <div class="input">
               <input type= "email"  placeholder="Email" name="email">
              
            </div>
            <div class="input">
               <input type= "number"  placeholder="Phone No" name="phone_no" max(10) >
               <box-icon name='mobile'></box-icon>
            </div>
            <div class="input">
              <input type="text"  placeholder="Username" name="username">
              <i class='bx bxs-user'></i>
               </div>
            <div class="input">
                <input type="password"  placeholder="Password" name="password" >
                <i class='bx bxs-lock-alt' ></i> 
            </div>
            <div class="remember-forget">
                <label> <input type="checkbox"  required > I agree to the terms & condition </label>
            </div>
            <button type="Submit" class="btn"  > Register </button>
            <!-- <div class="register_link">
                <p>Already have an account? <a href="login.php" > Login </a></p>
            </div> -->
            </form>
        </div>
    </body>
</html>
