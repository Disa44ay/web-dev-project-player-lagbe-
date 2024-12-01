<?php
// Include the header
include('header.php');
?>

<!-- Linking CSS file explicitly for this page -->
<link rel="stylesheet" href="css/style.css">

<!-- Sign-up section starts here -->
<section class="sign-up-section">
    <div class="container">
        <h2>Sign Up</h2>
        <p>Register to join Player Lagbe and start recruiting players!</p>

        <form action="#" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            
            <button type="submit" class="button">Sign Up</button>
        </form>
    </div>
</section>
<!-- Sign-up section ends here -->

<?php
// Include the footer
include('footer.php');
?>
