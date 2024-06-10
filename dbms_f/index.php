// <?php
// session_start();

// include("connect.php");
// include("function.php");
// $user_data = check_login($con);


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Website</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1>Blood Donation Website</h1>
    </header>
    <nav>
        <ul>
            <!-- <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li> -->
            <!-- <li><a href="adminlogin.php">Admin Login</a></li> -->
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section class="awareness">
            <h2>Blood Donation Awareness</h2>
            <p>Blood donation is an essential activity that can save lives. Donated blood is used for various medical treatments, surgeries, and emergencies. By donating blood, you can contribute to the well-being of others in need.</p>
            <p>Here are some key points about blood donation:</p>
            <ul>
                <li>One donation can save up to three lives.</li>
                <li>Blood cannot be manufactured; it can only come from generous donors.</li>
                <li>Donating blood is safe and simple.</li>
                <li>Most people between the ages of 17 and 65 are eligible to donate blood.</li>
                <li>Donated blood is tested for infectious diseases to ensure it is safe for transfusion.</li>
            </ul>
            <p>If you're eligible, consider donating blood today and make a difference in someone's life!</p>
        </section>
        <section class="gallery">
            <h2>Gallery</h2>
            <img src="image/blood_donation1.jpg"  >
            <img src="image/blood_donation2.jpg"  >
            <img src="image/blood_donation3.jpg"  >
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Blood Donation Website. All rights reserved.</p>
    </footer>
</body>
</html>
