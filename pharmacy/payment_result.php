<!DOCTYPE html>
<html>
<head>
    <title>Payment Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> HOME </title>
    <link rel="stylesheet" href="style.css">
    <link rel="javascript" href="loginscript.js">
    <link rel="preconnect" href="http://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    
</head>
<body>
<div class="lang"></div>
    <div id="google_translate_element"></div>
    
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div class="lang"></div>
                    </div>
                    <div class="navbar" id="navbarResponsive">
       <ul class="navbar-nav navbar-sidenav right-align" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="product.php">
                 <span class="nav-link-text" style="color: white;" >Dashboard</span>
             </a>
          </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="product.php">
                       <span class="nav-link-text" style="color: white;">Home</span>
                   </a>
              </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                         <a class="nav-link" href="home.html">
                            <span class="nav-link-text" style="color: white;">Logout</span>
                         </a>
               </li>
      </ul>
         
           
  
  <style>
        body {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(medicine.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    text-align:right ;
  }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-result {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            text-align: center;
        }

        .success {
            color:  rgb(119, 91, 119);
        }

        .failure {
            color: red;
        }
  </style>
  
  <div class="container">
    <div class="payment-result">
        <h1>Payment Result</h1>

        <?php
        // Retrieve the payment status from the URL parameter
        $paymentStatus = $_GET['status'];

        if ($paymentStatus === 'success') {
            echo '<h2 class="success">Payment Successful!</h2>';
            // Display any additional success message or order details
        } else {
            echo '<h2 class="failure">Payment Failed!</h2>';
            // Display any additional failure message or error details
        }
        ?>

        <a href="product.php" class="button">OK</a>
    </div>
</div>

</body>
</html>
