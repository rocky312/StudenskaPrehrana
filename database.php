<?php
    $server = "localhost";
    $user = "student";
    $pass = "student123";
    $baza = "studentska_prehrana";
    
    $link = mysqli_connect($server, $user, $pass, $baza); 

    mysqli_query($link, "SET NAMES 'utf8'");
?>
