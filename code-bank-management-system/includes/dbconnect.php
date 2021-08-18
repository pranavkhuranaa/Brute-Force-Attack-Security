<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'bank';

    $con = mysqli_connect($server, $user, $password, $db);

    if(!$con){
        
        die('Could not connect');
    }

?>
