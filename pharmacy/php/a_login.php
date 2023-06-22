<?php

    include_once 'connection.php';

    // Take user inputs
   
    $email = $_POST ['email'];
    $password = $_POST['password'];

    $sql = "insert into ad_login(email,password) values('$email','$password');";
    
    mysqli_query($conn, $sql);

    header('location: ../admin_p.php/');

?>