

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'pharmarcy');
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
              <a class="nav-link" href="product.php">
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
           </nav>
           <div class="content-wrapper">
           <div class="container-fluid">


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
           <li class="breadcrumb-item">
             <a href="product.php">Dashboard</a>
           </li>
            <li class="breadcrumb-item active">Product Page</li>
        </ol>


       <!-- Logout Modal-->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
       </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
         </div>
        </div>
         </div>
       
    </div>
      
    <section>
      <div class="section">
        <div id="section2" class="section2">
          <div class="container">
            <div class="items">
              <a href="payment.php" class="img img1"> <img src="amatem-forte-side-effects.jpg"> </a>
              <div class="name">Amatem Forte</div>
              <div class="price">¢20</div>
              <div class="info">Amatem Forte is a malaria drugs </div>
            </div>
            <div class="items">
             <a href="payment.php" class="img img1"><img src="coaterm-kids.jpg" alt=""></a>
              <div class="name">Coateam</div>
              <div class="price">¢20</div>
              <div class="info">Coateam is a malaria drugs.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="gettyimages-1215975101-1--4ed2c768a05f39c817a289586781120b91286b86.jpg" alt=""></a>
              <div class="name">Plaquenil</div>
              <div class="price">¢30</div>
              <div class="info">Plaquenil is a malaria drugs.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="Malaria-drug3.jpg" alt=""></a>
              <div class="name">Artemther Lumefantrine</div>
              <div class="price">¢30</div>
              <div class="info">Artemther Lumefantrine is a malaria drugs.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="5e7233c6c485401fab1a7833.webp" alt=""></a>
              <div class="name">Tylenol</div>
              <div class="price">¢30</div>
              <div class="info">Tylenol is use for fever .</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="Paracetamol1.jpg.jfif" alt=""></a>
              <div class="name">Paracetamol</div>
              <div class="price">¢5</div>
              <div class="info">Paracetamol is use for fever and headache.</div>
            </div>
            <div class="items">
              <a href="payment.php" class="img img1"><img src="download img.jfif" alt=""></a>
              <div class="name">Gaviscon</div>
              <div class="price">¢10</div>
              <div class="info"> Gaviscon is use for indigestion.</div>
            </div>
            <div class="items">
              <<a href="payment.php" class="img img1"><img src="download img2.jfif" alt=""></a>
              <div class="name">Acidil</div>
              <div class="price">¢10</div>
              <div class="info">Acidil is use for indigestion.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="download img3.jfif" alt=""></a>
              <div class="name">Nexium Control</div>
              <div class="price">¢20</div>
              <div class="info">Nexium Control is use for indigestion.</div>
            </div>
            <div class="items">
              <<a href="payment.php" class="img img1"><img src="download img4.jfif" alt=""></a>
              <div class="name">Rennie</div>
              <div class="price">¢15</div>
              <div class="info">Rennie is use for indigestion.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="download img5.jfif" alt=""></a>
              <div class="name">Diarrhoea Relief</div>
              <div class="price">¢15</div>
              <div class="info">Diarrhoea Relief </div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="imodium-msr-24ct-n.jpg" alt=""></a>
              <div class="name">Imodium</div>
              <div class="price">¢20</div>
              <div class="info"> Imodium is use for diarrhoea relief.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="images 1.jfif" alt=""></a>
              <div class="name">Vitamins</div>
              <div class="price">¢100</div>
              <div class="info">Vitamins.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="images vic.jfif" alt=""></a>
              <div class="name">Vitamins</div>
              <div class="price">¢50</div>
              <div class="info">Vitamins.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="download 1.jfif" alt=""></a>
              <div class="name">Lofnac</div>
              <div class="price">¢5</div>
              <div class="info">Lofnac is used for Pain relief.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="download 2.jfif" alt=""></a>
              <div class="name">Corcin</div>
              <div class="price">¢5</div>
              <div class="info">Corcin is use for Pain relief.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="3.jfif" alt=""></a>
              <div class="name">Hemoclin</div>
              <div class="price">¢10</div>
              <div class="info">Blood Medicine.</div>
            </div>
            <div class="items">
            <a href="payment.php" class="img img1"><img src="4.jfif" alt=""></a>
              <div class="name">Pimfree</div>
              <div class="price">¢50</div>
              <div class="info">Blood Medicine</div>
            </div>
          </div>
  
        </div>
      </div>
  
    </section>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
           <!-- Core plugin JavaScript-->
               <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Custom scripts for all pages-->
             <script src="js/sb-admin.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="app.js"></script>
  
  </body>
  
  </html>
  </body>
</html>