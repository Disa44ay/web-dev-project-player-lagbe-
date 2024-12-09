<?php include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>
            <h1>Manage admin</h1>

            <br><br>
            <a href="<?php echo HOMEURL; ?>admin/add-items.php" class="btn-primary">Add product</a>
            <br><br><br>

            <?php 
                if (isset($_SESSION['add'])) {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>

            <table class="tbl-full">
                <tr>
                    <th>Serial Number</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Abdullah Sayeed</td>
                    <td>Sayeed</td>
                    <td>
                        <a href="#" class="btn-secondary-up">Update</a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="btn-secondary-del">Delete Admin</a>

                    </td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Trisha Barua</td>
                    <td>Trisha</td>
                    <td>
                        <a href="#" class="btn-secondary-up">Update</a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="btn-secondary-del">Delete Admin</a>

                    </td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Tahamed Esaiet</td>
                    <td>Tahamed</td>
                    <td>
                        <a href="#" class="btn-secondary-up">Update</a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="btn-secondary-del">Delete Admin</a>

                    </td>
                </tr>

            </table>


        </h1>
    </div>
</div>

<?php include('footer.php'); ?>