<?php include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>

        <?php 
            // 1. Get the ID of the selected admin
            $id = $_GET['id'];

            // 2. Create SQL query to get the admin details
            $sql = "SELECT * FROM admin_info WHERE AID = $id";
            $res = mysqli_query($conn, $sql);

            if ($res == true) {
                $count = mysqli_num_rows($res);
                if ($count == 1) {
                    // Get admin details
                    $row = mysqli_fetch_assoc($res);
                    $full_name = $row['FULL_NAME'];
                    $username = $row['USERNAME'];
                } else {
                    // No admin found
                    header('location:' . HOMEURL . 'admin/manage-admin.php');
                }
            } else {
                echo "Failed to execute query: " . mysqli_error($conn);
            }
        ?>

        <form action="" method="POST">
            <table class="form-table">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Changes" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php 
if (isset($_POST['submit'])) {
    // Get form data
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];

    // Debug output
    echo "ID: $id <br>";
    echo "Full Name: $full_name <br>";
    echo "Username: $username <br>";

    //create a sql to update the database
    $sql = "UPDATE admin_info SET
    FULL_NAME = '$full_name',
    USERNAME = '$username'
    WHERE AID = '$id'
    ";
    //execute the query
    $res = mysqli_query($conn, $sql);

    //check whether the query executed or not
    if($res == true){
        //query executed and admin updated
        $_SESSION['update'] = "<div class = 'success'>Admin updated successfully.</div>";

        //redirect to manage admin page
        header('location:'.HOMEURL.'admin/manage-admin.php');
    }else{
        //query executed and admin updated
        $_SESSION['update'] = "<div class = 'error'>Failed to update admin.</div>";

        //redirect to manage admin page
        header('location:'.HOMEURL.'admin/manage-admin.php');

    }


}
?>

<?php include('footer.php'); ?>
