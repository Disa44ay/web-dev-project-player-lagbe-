<?php include('header.php'); ?>

<div class='main-content'>
    <div class='wrapper'>
        <h1>Change Password</h1>
        <br><br>

        <form action="" method="POST">
            <table class='form-table'>
                <tr>
                    <td>Current password: </td>
                    <td>
                        <input type="password" name="current_password" placeholder="Enter your current password">
                    </td>
                </tr>
                <tr>
                    <td>New password: </td>
                    <td>
                        <input type="password" name="new_password" placeholder="Enter a new password">
                    </td>
                </tr>
                <tr>
                    <td>Re-type password: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Enter the new password again">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <!-- Correctly pass ID -->
                        <input type="submit" name="submit" value="Confirm" class='btn-primary'>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $current_password = mysqli_real_escape_string($conn, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Fetch hashed password from the database
    $sql = "SELECT PASSWORD FROM admin_info WHERE AID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res && $res->num_rows === 1) {
        $row = $res->fetch_assoc();
        $hashed_password = $row['PASSWORD'];

        // Verify current password
        if (password_verify($current_password, $hashed_password)) {
            // Check if new password matches confirm password
            if ($new_password === $confirm_password) {
                $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Update the password in the database
                $sql2 = "UPDATE admin_info SET PASSWORD = ? WHERE AID = ?";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bind_param("si", $new_hashed_password, $id);

                if ($stmt2->execute()) {
                    $_SESSION['password_changed'] = "<div class='success'>Password changed successfully.</div>";
                } else {
                    $_SESSION['password_not_changed'] = "<div class='error'>Failed to change password.</div>";
                }
            } else {
                $_SESSION['password_mismatch'] = "<div class='error'>Passwords do not match.</div>";
            }
        } else {
            $_SESSION['user_not_found'] = "<div class='error'>Current password is incorrect.</div>";
        }
    } else {
        $_SESSION['user_not_found'] = "<div class='error'>User not found.</div>";
    }

    header('Location: ' . HOMEURL . 'admin/manage-admin.php');
    exit;
}
?>

<?php include('footer.php'); ?>
