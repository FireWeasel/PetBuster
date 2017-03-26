<?php
  session_start();
  session_regenerate_id();
  if(!isset($_SESSION['username'])) {
    header("Location:../views/access_denied.html");
  }
  include "db_connect.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['post-title'];
    $description = $_POST['post-description'];
    $author = $_SESSION['username'];

  }

  $db_conn = new DBConnection();
  $db_conn->addingPost($title, $description, $author);

  Header("Location:../views/post-create.php");
?>
