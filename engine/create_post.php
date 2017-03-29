<?php
  include "db_connect.php";
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['post-title'];
    $description = $_POST['post-description'];
    $author = $_SESSION['username'];
    $date = $_POST['date'];
    $type = $_POST['radio'];
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
  }

  $db_conn = new DBConnection();
  $db_conn->addingPost($title, $description, $author, $type, $date, $file_destination);

  header("Location:../views/post-create.php");
?>
