<?php include('header.php'); ?>

<!--main content section starts here -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>

        <br><br>

        <?php
        // Display all session messages if set
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        if (isset($_SESSION['user_not_found'])) { // Fixed key name to match Update Password logic
            echo $_SESSION['user_not_found'];
            unset($_SESSION['user_not_found']);
        }

        if (isset($_SESSION['password_mismatch'])) { // Fixed key name to match Update Password logic
            echo $_SESSION['password_mismatch'];
            unset($_SESSION['password_mismatch']);
        }

        if (isset($_SESSION['password_changed'])) { // New: Display success message
            echo $_SESSION['password_changed'];
            unset($_SESSION['password_changed']);
        }

        if (isset($_SESSION['password_not_changed'])) { // New: Display failure message
            echo $_SESSION['password_not_changed'];
            unset($_SESSION['password_not_changed']);
        }
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>

        <br><br>

        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br><br>

        <table class="tbl-full">
            <tr>
                <th>Serial Number</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>

            <?php
            $sql = "SELECT * FROM admin_info";
            $res = mysqli_query($conn, $sql);

            if ($res == true) {
                $count = mysqli_num_rows($res);
                $sn = 1;

                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['AID'];
                        $full_name = $rows['FULL_NAME'];
                        $username = $rows['USERNAME'];
            ?>
                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $full_name; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
                                <a href="<?php echo HOMEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                <a href="<?php echo HOMEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary-up">Update</a>
                                <a href="<?php echo HOMEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-secondary-del">Delete Admin</a>
                            </td>
                        </tr>
            <?php
                    }
                }
            }
            ?>
        </table>

        <div class="clearFix"></div>
    </div>
</div>
<!--main content section ends here -->

<?php include('footer.php'); ?>
