<?php include('header.php'); ?>

<div class="main content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br><br>

        <form action="" method="post">
            <table class="form-table">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="Full_Name" placeholder="Enter your name" required>
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your username" required>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Enter password" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Done" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>

<?php
if (isset($_POST['submit'])) {
    // Button clicked
    $full_name = trim($_POST["Full_Name"]);
    $username = trim($_POST["username"]);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if the username already exists using a prepared statement
    $sql_check = "SELECT * FROM admin_info WHERE USERNAME = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $res_check = $stmt_check->get_result();

    if ($res_check->num_rows > 0) {
        // Username already exists
        $_SESSION['add'] = "Username already exists. Please choose a different one.";
        header("location:" . HOMEURL . "admin/manage-admin.php");
        exit;
    } else {
        // Proceed with inserting the new admin
        $sql_insert = "INSERT INTO admin_info (FULL_NAME, USERNAME, PASSWORD) VALUES (?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("sss", $full_name, $username, $password);

        if ($stmt_insert->execute()) {
            // Data inserted successfully
            $_SESSION['add'] = "Admin added successfully.";
        } else {
            // Failed to insert data
            $_SESSION['add'] = "Failed to add admin.";
        }

        // Redirect to manage-admin page
        header("location:" . HOMEURL . "admin/manage-admin.php");
        exit;
    }
}
?>
