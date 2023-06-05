<?php
    //db_login
    $db_hostname = 'localhost';
    $db_username = '87231';
    $db_password = '42Batuhan630.';
    $db_database = 'basisschool';

    $mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

    if(!$mysqli){
        echo "FOUT: geen connectie naar batabase. <br/>";
        echo "Error: " . mysqli_connect_error() . "<br/>";
        exit;
    }

?>