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
            <label for="email">Your username</label>
            <input type="text" id="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>">

            <br><br>

            <!-- Password -->
            <label for="password">Your password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>

            <!-- sub container for the checkbox and forgot password link -->
            <div class="subcontainer">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <p class="forgotpsd"> <a href="signup.php">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
<button class="button" type="submit" name="login" value="Login"> login</button>
            <!-- Sign up link -->
            <p class="register">Not a member?  <a href="signup.php">Register here!</a></p>

        </div>

    </form>

  <?php
  include "connection.php";

  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate login credentials
    $query = "SELECT * FROM peoples WHERE email = $1 AND password = $2";
    $result = pg_query_params($con, $query, array($email, $password));

    if ($result && pg_num_rows($result) > 0) {
      // Successful login
      ?>
      <script>
        alert("Login successful");
        // Redirect to the desired page
        window.location.href = "/project/mainpage/index.html";
      </script>
      <?php
      exit();
    } else {
      // Failed login
      ?>
      <script>
        alert("Invalid email or password. Please try again.");
      </script>
      <?php
    }
  }
  ?>
</body>

</html>