<?php 
    //include<constants.php
    include('../config/constants.php');


    //1.get the id of the admin to be deleted
    echo $id = $_GET['id'];

    //2.create sql query to delete admin
    $sql = "DELETE FROM admin_info WHERE AID = $id";

    $res = mysqli_query($conn, $sql);
    //check wheather the query executed or not
    if($res = true){
        //echo "Admin Deleted";
        //create session variable to dislay message
        $_SESSION['delete'] = "<div class = 'success'>Admin deleted successfully</div>";
        //redirect to manaeg admin page
        header('location:'.HOMEURL.'admin/manage-admin.php');
    }else{
        //echo "Admin Deletion failed";
         //create session variable to dislay message
         $_SESSION['delete'] = "<div class = 'error'>Failed to delete admin</div>";
         //redirect to manaeg admin page
         header('location:'.HOMEURL.'admin/manage-admin.php');
    }

     //3.redirect to add-admin page
?>