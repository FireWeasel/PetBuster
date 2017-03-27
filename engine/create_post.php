<?php
  include "db_connect.php";
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['post-title'];
    $description = $_POST['post-description'];
    $author = $_SESSION['username'];
    $date = $_POST['date'];
    $type = $_POST['radio'];
  }

  $db_conn = new DBConnection();
  $db_conn->addingPost($title, $description, $author, $type, $date);

  header("Location:../views/post-create.php");
?>
