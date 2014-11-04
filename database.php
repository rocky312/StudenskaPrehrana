<?php
    $server = "localhost";
    $user = "admin";
    $pass = "admin";
    $baza = "studentska_prehrana";
    
    $link = mysqli_connect($server, $user, $pass, $baza); 

    mysqli_query($link, "SET NAMES 'utf8'");
?>
