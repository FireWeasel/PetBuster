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
	<link rel="stylesheet" type="text/css" href="../css/about-us.css">
	<link rel="stylesheet" type="text/css" href="../css/navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title>About us</title>
</head>
<body>
	<div id='cssmenu'>
	    <ul>
	        <li class='active'><a href='posts.php?id=main'>Home</a></li>
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
		<div id="post-box">
			<div id="info">
				<h1>About us</h1>
				<hr>
			</div>
				<div style="text-align: center;" class="row">
		    		<div class="col col-lg-3">
			     		<img style="width: 150px; height: 150px; border-radius: 25px;" src="../images/paw-transparent.png"> 
			    	</div>
			    	<div class="col col-lg-6">
			     		<p>PetBuster is website for registering your lost pet. It also helps people all around the world to check if their pet was found. Users can log in or register in the website to create a new post about an animal. PetBuster was established by three students in Fontys in the 2017.</p>
			   		</div>
			  	</div>
				<hr>
				<div style="text-align: right; /*margin-left: 100px*/" class="row">
		    	<div class="col col-lg-3">
			      <img style="width: 100px; height: 100px; border-radius: 25px;" src="../images/dog-1.jpg"> 
			    </div>
			    <div class="col col-lg-3">
			      <img style="width: 100px; height: 100px; border-radius: 25px;" src="../images/cat-1.jpg"> 
			    </div>
			    <div class="col col-lg-3">
			      <img style="width: 100px; height: 100px; border-radius: 25px;" src="../images/bird-1.jpg"> 
			    </div>
			  	</div>
			  	<div style="text-align: right; " class="row">
			    <div class="col col-lg-3" style="">
			      <p>Marina Tzenkova</p>
			    </div>
			    <div class="col col-lg-3" style="">
			      <p>Lyubomir Yankov</p>
			    </div>
			    <div class="col col-lg-3" style="">
			      <p>Dimo Popov</p>
			    </div>
		  	</div>
		</div>
	</div>
</body>
</html>


