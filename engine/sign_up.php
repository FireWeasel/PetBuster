<?php
  include "db_connect.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['signup-user'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-pass'];
    $password_confirmation = $_POST['signup-pass-confirm'];

    $salt = uniqid('', true);
    $algo = '6'; // CRYPT_SHA512
    $rounds = '5042';
    $cryptSalt = '$'.$algo.'$rounds='.$rounds.'$'.$salt;
    $hashedPassword = crypt($password, $cryptSalt);
  }
  
  $db_conn = new DBConnection();
  $db_conn->userSignUp($username, $email, $hashedPassword);

  header("Location:../views/posts.php");
?>
