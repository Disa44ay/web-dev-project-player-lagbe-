
<?php

    //session starts
    session_start();



    //constants
    define('HOMEURL', 'http://localhost/PROJECT_PLAYER_LAGBE_LOCALHOST/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'idiot_sandwich');


        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        //connection establish
        if(!$conn){
            die("ERROR ". mysqli_error());
        }else{
            echo "connection established";
        }
?>