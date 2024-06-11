<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <h1>Welcome</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Sign in</h3>
            <p>Sign in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="email">Your Email*</label>
            <input type="text" id="email" name="email" placeholder="enter your email" required >

            <br>

            <!-- Password -->
            <label for="password">Your Password*</label>
            <input type="password" id="password" name="password" placeholder="enter your password" required>

            <br>

            <!-- confirm Password -->
            <label for="password">confirm password*</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="confirm your password" required>

            <!-- sub container for the checkbox and forgot password link -->
            <div class="subcontainer">
                <label> 
                    <br>
                  <input type="checkbox" checked="checked" name="remember"> Agree to our <a href="#">Terms & Conditions</a>
                </label>
            </div>


            <!-- Submit button -->
<button type="submit" name="signup" value="Create Account"> Create Account</button>
            <!-- Sign up link -->
            <p class="register">Already have Account <a href="login.php">Click here!</a></p>

        </div>

    </form>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    // Include database connection and validation functions
    include "connection.php";
    include "rfunction.php";

    // Check if the form is submitted
    if (isset($_POST['signup'])) {
        // Corrected the button name to match the form

        // Get form data
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the email is already in use
        $checkQuery = "SELECT * FROM peoples WHERE email = $1";
        $checkResult = pg_query_params($con, $checkQuery, array($email));

        if (pg_num_rows($checkResult) > 0) {
            // Display alert if the email is already in use
            echo "<script>alert('Email already in use. Please choose a different email.');</script>";
        } elseif (!arePasswordsEqual($password, $_POST['confirm-password'])) {
            // Display alert if passwords do not match
            echo "<script>alert('Passwords do not match');</script>";
        } elseif (!passwordLength($password)) {
            // Display alert if password is less than 8 characters
            echo "<script>alert('Password must be at least 8 characters long');</script>";
        } elseif (!empty($email) && !empty($password) && isValidEmail($email)) {
            // Use prepared statement to prevent SQL injection
            $insertQuery = "INSERT INTO peoples (email, password) VALUES ($1, $2)";
            $insertResult = pg_query_params($con, $insertQuery, array($email, $password));

            if ($insertResult) {
                // Display success message and redirect to login page
                echo "<script>alert('Data inserted successfully'); window.location.href = 'login.php';</script>";
            } else {
                // Display error message if data insertion fails
                echo "<script>alert('Error inserting data');</script>";
            }
        } else {
            // Display alert if form fields are not filled correctly
            echo "<script>alert('Please fill all the fields and provide a valid email');</script>";
        }
    }
    // Debugging: Display form data

    ?>

</body>

</html>
