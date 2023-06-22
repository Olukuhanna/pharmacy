<?php

    include_once 'connection.php';

    // Take user inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into users(name,email,password) values('$name','$email','$password');";
    mysqli_query($conn, $sql);
    
   

    header('location: /product.php?SignupSuccessful')
   
?>