<?php
  include "db_connect.php";
  session_start();
if(isset($_FILES['file'])){
    $file = $_FILES['file'];


    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('png', 'jpg', 'jepg');

    if(in_array($file_ext, $allowed)){
        if($file_error === 0){
            $file_name_new = uniqid('', true) . '.' . $file_ext;
            $file_destination = '../uploads/' . $file_name_new;
            if(move_uploaded_file($file_tmp, $file_destination)){

            }

        }
    }
}
else{
  
}
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $body = $_POST['comment-body'];
    $author = $_SESSION['username'];
    $post_id = $_GET['post_id'];
  }

  $db_conn = new DBConnection();
  $db_conn->addComment($body, $author, $post_id);

  header("Location:../views/post-view.php?id=$post_id");
?>
