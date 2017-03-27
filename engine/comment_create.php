<?php
  include "db_connect.php";
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $body = $_POST['comment-body'];
    $author = $_SESSION['username'];
    $post_id = $_GET['post_id'];
  }

  $db_conn = new DBConnection();
  $db_conn->addComment($body, $author, $post_id);

  header("Location:../views/post-view.php?id=$post_id");
?>
