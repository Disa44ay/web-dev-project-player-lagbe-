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
                        <input type="text" name="Full_Name" placeholder="enter your name">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="your username">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="enter password">
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
    if(isset($_POST['submit']))
    {
        //button clicked
        //echo "button clicked";
        $full_name = $_POST["Full_Name"];
        $username = $_POST["username"];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO admin_info SET
            FULL_NAME = '$full_name',
            USERNAME = '$username',
            PASSWORD = '$password'
        ";


        //echo $sql;
       /* $conn = mysqli_connect('localhost', 'root', '', 'idiot_sandwich');

        //connection establish
        if(!$conn){
            die("ERROR ". mysqli_error());
        }else{
            echo "connection established";
        }*/
        
        //to save the data in database
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        //confirming if the data is inserted or not
        if($res == true){
            //echo "data inserted";
            //create a variable to show session message
            $_SESSION['add'] = "Admin added successfully";

            //redirect page to add-admin page
            header("location:".HOMEURL."admin/manage-admin.php");

        }
        else{
            //echo "failed to insert";

             //create a variable to show session message
             $_SESSION['add'] = "Failed to add admin";

            //redirect page to add-admin page
            header("location:".HOMEURL."admin/manage-admin.php");
        }
    }
?>