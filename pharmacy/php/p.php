<?php

    include_once 'connection.php';

    // Take user inputs
   
    $product_name = $_POST['product_name'];
    $product_price= $_POST['product_price'];
    $product_cat= $_POST['product_cat'];
    $product_details =$_POST['product_details'];
    
    $sql = "insert into products(product_name,product_price,product_cat,product_details) values('$product_name','$product_price','$product_cat','$product_details');";
    
    mysqli_query($conn, $sql);

    header('location: ../product.php?SignupSuccessful')

?>