<!--
  References: 
    1) Rajdhani Google Fonts: https://fonts.google.com/specimen/Rajdhani?preview.text_type=custom#standard-styles
    2) Adding an image in title bar: https://www.w3docs.com/snippets/html/how-to-add-an-image-in-the-title-bar.html
-->
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
<!-- Start of reference used to add image to title bar: https://www.w3docs.com/snippets/html/how-to-add-an-image-in-the-title-bar.html -->
        <link rel="shortcut icon" href="Images/ESLogoGreen.png">
<!-- End of reference used to add image to title bar: https://www.w3docs.com/snippets/html/how-to-add-an-image-in-the-title-bar.html -->
        <link rel="stylesheet" href="login.css">
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>Login</title>
    </head>
    <body>
      <form class="box" action="login.php" method="POST">
        <input type="hidden" name="action" value="do_login">
        <img src="Images/missourESLogoWhite-V.png" alt="ES Logo">
         <h1>Welcome, please login</h1>
         <input type="text" name="username" placeholder="Username" required>
         <input type="password" name="password" placeholder="Password" required>
         <input type="submit" value="Login">
                
         <div class="inputColor">
        <?php
            if ($error) {
                print "<div>$error</div>";
            }
        ?>
         </div>
      </form>
    </body>
</html>