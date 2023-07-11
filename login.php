<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login PHP</title>
    </head>
    <body>
<!-- Start of code reference from Wergeles lectures mixed with help from office hours -->
<?php

$action = empty($_POST['action']) ? '' : $_POST['action'];

if($action == 'do_login') {
  handle_login();
} 
else {
  login_form();
}

function handle_login() {
  $username = empty($_POST['username']) ? '' : $_POST['username'];
  $password = empty($_POST['password']) ? '' : $_POST['password'];
  
  require_once 'db.conf.php';

  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  if($mysqli->connect_error) {
    $error = 'Error (' . $mysqli->connect_error . ') ' . $mysqli->connect_error;
    echo $error;
    require "index.php";
    exit;
  }

$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);
$query = "SELECT id FROM users WHERE username = '$username' AND userPassword = sha1('$password')";

$result = $mysqli->query($query);

  if($result) {
    
    $match = $result->num_rows;

    if($match == 1) {
      $_SESSION['loggedin'] = $username;
      header("Location: homePage.html");
      exit;
    }
    else {
      $error = "Error: Inccorect username or password.";
      require "index.php";
      exit;
    }
    $result->close();
    $mysqli->close();
    exit;
  }
}

function login_form() {
  $username = "";
	$error = "";
	require "login_form.php";
  exit;
}
?>
<!-- End of code reference from Wergeles lectures mixed with help from office hours -->
    </body>
</html>