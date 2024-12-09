<?php include('../config/constants.php'); ?>
<html>
    <head>
        <title>
            Login - Player Lagbe Admin Login
        </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br><br>

        <?php  
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            if(isset($_SESSION['no-login message'])){
                echo $_SESSION['no-login message'];
                unset($_SESSION['no-login message']);
            }
            
        ?>

        <form action="" method="POST">
            Username: <br>
            <input type="text" name="username" placeholder="Enter username" required>
            <br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter password" required>
            <br><br>
            
            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
        </form>

        <p class="text-center">Created by - Team Idiot Sandwich</p>
    </div>
    </body>
</html>

<?php
    // Check whether the submit button is clicked or not
    if (isset($_POST['submit'])) {
        // Process for login

        // 1. Get the data from login form
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // 2. Prepare SQL query to check if the user exists
        $sql = "SELECT * FROM admin_info WHERE USERNAME = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // 3. Check if the user exists
        if ($result->num_rows == 1) {
            // Fetch user data
            $row = $result->fetch_assoc();
            $hashed_password = $row['PASSWORD']; // Hashed password from the database

            // 4. Verify the password
            if (password_verify($password, $hashed_password)) {
                // Password matches
                $_SESSION['login'] = "<div class='success text-center'>Login Successful.</div>";

                $_SESSION['user'] = $username;//check whether the user is logout

                
                // Redirect to admin dashboard
                header('location: ' . HOMEURL . 'admin/');
            } else {
                // Password does not match
                $_SESSION['login'] = "<div class='error text-center'>Login Failed (username or password did not match).</div>";

                // Redirect to login page
                header('location: ' . HOMEURL . 'admin/login.php');
            }
        } else {
            // Username does not exist
            $_SESSION['login'] = "<div class='error text-center'>Login failed (username or password did not match).</div>";

            // Redirect to login page
            header('location: ' . HOMEURL . 'admin/login.php');
        }
    }
?>
