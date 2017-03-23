<?php
  include "db_connect.php";
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $salt = uniqid('', true);
    $algo = '6'; // CRYPT_SHA512
    $rounds = '5042';
    $cryptSalt = '$'.$algo.'$rounds='.$rounds.'$'.$salt;
    $hashedPassword = crypt($password, $cryptSalt);

    $db_conn = new DBConnection();
    $hashedPasswordFromDB = $db_conn->getUserHashedPassword($username);

    if (crypt($password, $hashedPasswordFromDB) == $hashedPasswordFromDB) {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['username'] = $username;
      header("Location:../views/posts.php");
      die();
    } else {
      echo "invalid credentials";
    }
  }
?>
