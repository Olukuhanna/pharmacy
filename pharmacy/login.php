



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="http://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>

        <div class="nav-links">
                 <ul>
                     <li><a href="home.html">HOME</a></li>
                     <li><a href="aboutus.html">ABOUT US</a></li>     
                                    
                     <div id="google_translate_element"></div>
                      <script type="text/javascript">
                         function googleTranslateElementInit()
                          {
                           new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                          }
                     </script>

                     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                      <div class="lang"></div>
                </ul>
         </nav>
      
     <div class="form-container">
        <form action="product.php" method="post">
            <h3>LOGIN </h3>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
           <input type="submit"  value="SUBMIT" class="from-btn" >
          <p> DON'T HAVE AN ACCOUNT? <a href="register.php">SIGN UP NOW</a></p>
        </form>
     </div>

</body>
</html>