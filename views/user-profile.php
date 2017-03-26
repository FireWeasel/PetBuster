<?php
session_start();
session_regenerate_id();
if (!isset($_SESSION['username'])) {
    header("Location:../views/access_denied.html");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
    <link rel="stylesheet" type="text/css" href="../css/user-profile.css">
    <link rel="stylesheet" type="text/css" href="../css/navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body>
<div id='cssmenu'>
    <ul>
        <li class='active'><a href='../index.php'>Home</a></li>
        <li><a href='posts.php?id=Lost'>Lost</a></li>
        <li><a href='posts.php?id=Found'>Found</a></li>
        <li><a href='#'>About</a></li>
        <li><a href='#'>Contact</a></li>
        <li><a href='../engine/sign_out.php'>Sign out</a></li>
    </ul>
</div>

<div class="title">
    <img src="../images/Black-Logo.png">
</div>

<div id="container">
    <div class="container-wrapper">
        <h1>Username</h1>
        <hr>
        <div class="user-info">
            <div class="row">
                <div class="col col-lg-4">
                    <img src="../images/sample-profile-picture.png">
                </div>
                <div class="col col-lg-2">
                    <?php

include('../engine/db_connect.php');
        $datab_con = new DBConnection();

        $userinfo = $datab_con -> getUserByUsername($_SESSION['username']);
include_once ("../entities/user.php");

?>
                    <p>Username: <?php echo $userinfo["username"] ?></p>
                    <p>Email: <?php echo $userinfo["email"] ?></p>
                    <p>telephone: <?php echo $userinfo["telephone"] ?></p>

                </div>
            </div>
        </div>
        <hr>
        <h1>User posts</h1>
        <div class="container-wrapper">
            <div class="row">
                <div class="col col-lg-2">
                    <img src="../images/sample-profile-picture.png" style="width: 100px; height: 100px">
                </div>
                <div class="col col-lg-10">
                    <p>Post title</p>
                    <div class="container-wrapper" style="width: 100%;">
                        <p>sample post description</p>
                        <a href="post-view.html" style="float: right;">Read more-></a>
                        <p>..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/navigation.js"></script>
</body>

</html>
