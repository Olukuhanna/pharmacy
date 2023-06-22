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
     <div class="form-container">
        <form action="product.php" method="post">
            <h3>REGISTER NOW</h3>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
          <input type="submit" name="submit" value="REGISTER NOW" class="from-btn " href="login.php">
          <p> HAVING AN ACCOUNT ALREDY? <a href="login.php">LOGIN NOW</a></p>
          
        </form>
     </div>
</body>
</html> 