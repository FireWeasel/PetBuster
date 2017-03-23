<?php
include "db_connect.php";
include "post.php";

if($_SERVER['REQUEST_METHOD']=='POST') {
	$title = $_POST['post title'];
}