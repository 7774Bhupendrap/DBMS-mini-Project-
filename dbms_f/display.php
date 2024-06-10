
<?php
session_start();
include("connect.php");
include("function.php");
// $user_data = check_login($con);
$sql = "SELECT id, name, email FROM blooddonor";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display Page</title>
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
            max-width: 800px;
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

        /* Data display styles */
        .data {
            margin-bottom: 20px;
        }

        .data table {
            width: 100%;
            border-collapse: collapse;
        }

        .data th, .data td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .data th {
            background-color: #f2f2f2;
        }

        .data th:first-child, .data td:first-child {
            border-left: none;
        }

        .data th:last-child, .data td:last-child {
            border-right: none;
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
        <h1>Data Display Page</h1>
        <div class="data">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  
                    
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Data Display Page. All rights reserved.</p>
    </footer>
</body>
</html>
