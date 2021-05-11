<?php 

    $con=mysqli_connect("localhost","root","","my_bank");

    if(!$con){
        die("error".mysqli_connect_error());
    }
    // else{
    //     echo"connection build";
    // }

?>