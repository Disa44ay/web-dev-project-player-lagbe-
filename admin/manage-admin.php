<?php include('header.php'); ?>

<!--main content section satrts here -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage admin</h1>

        <br><br>
        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add']; //to show the session message
            unset($_SESSION['add']); //removing session message
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
            //query to get all the admin
            $sql = "SELECT * from admin_info";
            //execute the query
            $res = mysqli_query($conn, $sql);
            
            //check wheather the query is executed or not
            if ($res == true) {

                //count rows to check wheather we have data in database or not
                $count = mysqli_num_rows($res);

                $sn = 1;//to fix the issue of serial number being shown without seqence if data is delted


                //check the number of rows
                if ($count > 0) {

                    while ($rows = mysqli_fetch_assoc($res)) {
                        //get individual data
                        $id = $rows['AID'];
                        $full_name = $rows['FULL_NAME'];
                        $username = $rows['USERNAME'];

                        //display the value in our table
            ?>

                        <tr>
                            <td>  <?php echo $sn++; ?></td>
                            <td> <?php echo $full_name; ?></td>
                            <td>  <?php echo $username; ?></td>
                            <td>
                                <a href="#" class="btn-secondary-up">Update</a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn-secondary-del">Delete Admin</a>

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
<!--main content section satrts here -->

<?php include('footer.php'); ?>