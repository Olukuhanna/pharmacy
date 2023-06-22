<?php 

    $conn = mysqli_connect('localhost','root','','pharmarcy');
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title> product</title>
   <link rel="stylesheet" href="a_panelstyle.css">
   
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          <div id="google_translate_element"></div>
                      <script type="text/javascript">
                         function googleTranslateElementInit()
                          {
                           new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                          }
                     </script>

                     <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                      <div class="lang"></div>
                    </div>
    <div class="navbar" id="navbarResponsive">
       <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="admin_p.php">
                 <span class="nav-link-text">Dashboard</span>
             </a>
          </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="home.html">
                       <span class="nav-link-text">Home</span>
                   </a>
              </li>
               
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="home.html">
                       <span class="nav-link-text">Logout</span>
                   </a>
              </li>
      </ul>
           </div>
           </nav><!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.html">Dashboard</a>
</li>
<li class="breadcrumb-item active">Product Page</li>
</ol>
<div class="row">
<div class="col-12">

</div>
<div class="col-md-8">
<form action="addproduct.php" method="post">
<div class="form-group">
<label>Product Name</label>
<input type="text" class="form-control" name="product_name" required>
</div>
<div class="form-group">
<label>Product Price</label>
<input type="text" class="form-control"  name="product_pirce" required>
</div>
<div class="form-group">
<label>Product Catgory</label>
<input type="text" class="form-control" name="product_cat" required>
</div>
<div class="form-group">
<label>Product Details</label>
<textarea class="form-control" name="product_details" required></textarea>
</div>
<button type="submit" class="btn btn-primary" name="reg_p">Submit</button>
</form>
</div>
</div>
</div>