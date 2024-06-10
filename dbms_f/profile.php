<?php
session_start();
include("connect.php");
include("function.php");
$user_data = check_login($con);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Blood Donation Website</title>
    <style>
        /* Resetting default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            padding: 20px;
        }

        /* Container styles */
        .container {
            max-width: 100%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Heading styles */
        h1 {
            color: #dc3545;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Profile data styles */
        .profile-data {
            margin-bottom: 20px;
        }

        .profile-data table {
            width: 100%;
            border-collapse: collapse;
        }

        .profile-data th, .profile-data td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .profile-data th {
            background-color: #f2f2f2;
        }

        .profile-data th:first-child, .profile-data td:first-child {
            border-left: none;
        }

        .profile-data th:last-child, .profile-data td:last-child {
            border-right: none;
        }

        /* Schedule styles */
        .schedule {
            margin-bottom: 20px;
        }

        .schedule h2 {
            color: #dc3545;
            margin-bottom: 10px;
        }

        .schedule ul {
            list-style: none;
            padding: 0;
        }

        .schedule li {
            margin-bottom: 10px;
        }

        /* Footer styles */
        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile - Blood Donation Website</h1>
        <div class="profile-data">
            <h2>Your Information</h2>
            <table>
                <thead>
                    <tr>
                        <th>user_id</th>
                        <th>user_name</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Weight</th>
                        <th>Blood group </th>
                        <th>Email</th>
                        <th>Mobile</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td><?php echo $user_data['user_id'] ?></td>
                        <td> <?php echo $user_data['user_name'] ?></td>
                        <td>  <?php echo $user_data['name'] ?> </td>
                        <td><?php echo $user_data['age'] ?></td>
                        <td> <?php echo $user_data['gender'] ?> </td>
                        <td> <?php echo $user_data['weight'] ?> </td>
                        <td> <?php echo $user_data['bldgrp'] ?> </td>
                        <td>  <?php echo $user_data['email'] ?> </td>
                        <td>  <?php echo $user_data['mobile'] ?> </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        <div class="schedule">
            <h2>Appointment Schedule</h2>
            <ul>
                <li><strong>Date:</strong> JUNE  4, 2024</li>
                <li><strong>Time:</strong> 1:00 PM - 2:00 PM</li>
                <li><strong>Location:</strong> JSPM'S Rajrishi Shahu College Of Engineering ,Tathawade</li>
            </ul>
            <!-- You can add more appointments here -->
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Blood Donation Website. All rights reserved.</p>
    </footer>
</body>
</html>
