<?php
    // $con = mysqli_connect("localhost","prime_admission",",iSA%U&s+;N+","prime_cdemo");
    $con = mysqli_connect("localhost","root","","prime_cdemo");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>