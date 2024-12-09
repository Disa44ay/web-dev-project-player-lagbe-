<?php 
    //authorization/ acess control
    //check whether the use is logged in or not
    if(!isset($_SESSION['user'])){

        //user is not logged in
        //redirect to login page with message
        $_SESSION['no-login message'] =  "<div class = 'error text-center'>Please login to access admin panel. </div>";
        //redirect to login page
        header('location:'.HOMEURL.'admin/login.php');
    }

?>