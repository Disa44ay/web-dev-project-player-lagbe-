<?php include('header.php'); ?>

<!--main content section satrts here -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage admin</h1>

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


        <div class="clearFix"></div>
    </div>
</div>
<!--main content section satrts here -->

<?php include('footer.php'); ?>