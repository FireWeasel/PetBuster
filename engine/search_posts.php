<?php
  include "db_connect.php";
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $title = $_GET['searchkey'];
  }

  $db_conn = new DBConnection();
  $posts = $db_conn -> getPostsByTitle($title);
  echo json_encode($posts);
?>
