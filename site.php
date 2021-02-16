<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>email sign-up form</title>
  <meta name="description" content="email sign-up form">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

</head>

<body>
  <h1>Newsletter Sign Up</h1>
  <form action="site.php" method="post">
    <input required type="text" name="first" placeholder="First Name">
    <input required type="text" name="last" placeholder="Last Name"><br>
    <input required type="text" name="email" placeholder="Email"><br>
    <input type="submit">
</form>
   <!-- <?php 
        $_POST["first"];
        $_POST["last"];
        $_POST["email"];
    ?> -->
  <script src="validation.js"></script>
</body>
</html>