<?php
$username = "my-user";
$password = "my-pass";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

    <!-- LOGGED IN CONTENT HERE -->
    <!DOCTYPE html>
    <html>
    <head>
      <title>Successful Login</title>
      <link rel="icon" type="image/x-icon" href="https://blackvikingpro.com/images/favicon.ico">
    </head>
    <body>

      <p>Successful Login...</p>
    
    </body>
    </html>

<?php
      exit;
   } else {
      echo "Bad Cookie.";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Sorry, that username does not match. <br /> <a href='index.php'> <--Go Back. </a>";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Sorry, that password does not match. <br /> <a href='index.php'> <--Go Back. </a>";
      exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Sorry, you could not be logged in at this time.";
   }
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Secure Login Script Using PHP</title>
   <link rel="icon" type="image/x-icon" href="https://blackvikingpro.com/images/favicon.ico">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<label><input type="text" name="user" id="user" /> User</label><br />
<label><input type="password" name="keypass" id="keypass" /> Password</label><br />
<input type="submit" id="submit" value="Login" />
</form>

</body>
</html>