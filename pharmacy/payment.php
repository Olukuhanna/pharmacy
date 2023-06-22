<?php
$conn = mysqli_connect('localhost', 'root', '', 'pharmarcy');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $card_num = $_POST['card_num'];
    $expri_date = $_POST['expri_date'];
    $cvv = $_POST['cvv'];

    // Perform necessary validation and sanitization on the form data

    // Connect to your database or perform any necessary operations

    // Implement integration with your chosen payment gateway or processor
    // Send the payment information and process the transaction
    // Handle the response from the payment gateway

    // Update your database or perform any necessary actions based on the payment status

    // Redirect the user to a success or failure page
    $paymentStatus = 'success'; // Replace with the actual payment status from your payment processing logic

    if ($paymentStatus === 'success') {
        header('Location: payment_result.php?status=success');
        exit;
    } else {
        header('Location: payment_result.php?status=failure');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="paymentstyle.css">
    <link rel="preconnect" href="http://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
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
              <a class="nav-link" href="admin_p.php">
                 <span class="nav-link-text" style="color: white;" right-align="float:right" ;" >Dashboard</span>
             </a>
          </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="product.php">
                       <span class="nav-link-text" style="color: white;">Home</span>
                   </a>
              </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                         <a class="nav-link" href="register.php">
                            <span class="nav-link-text" style="color: white;">Logout</span>
                         </a>
               </li>
      </ul>
         
           
  
  <style>
    *{
    margin: 0;padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
    }

    body {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(medicine.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    color:white;
    
  }

    /* Payment form container */
    .payment-container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid rgb(119, 91, 119);
      border-radius: 4px;
      
    }
    .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
   


    /* Form fields */
    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid rgb(119, 91, 119);
      border-radius: 4px;
    }

    .form-group input[type="submit"] {
      padding: 10px 20px;
      background-color:rgb(119, 91, 119);
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
  
    <div class="container">
        <div class="payment-container">
            <h2>Payment Details</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="card_num">Card Number</label>
                    <input type="text" id="card_num" name="card_num" placeholder="XXXX XXXX XXXX XXXX" required>
                </div>

                <div class="form-group">
                    <label for="expri_date">Expiration Date</label>
                    <input type="text" id="expri_date" name="expri_date" placeholder="MM/YY" required>
                </div>

                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="number" id="cvv" name="cvv" placeholder="XXX" required>
                </div>

                <div class="form-group">
                    <input type="submit" value="Pay Now">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
