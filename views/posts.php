<!DOCTYPE html>
<html>
	<head>
		<title>Posts</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/posts.css">
		<link rel="stylesheet" type="text/css" href="../css/navigation.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>

	<body>
		<div class="row">
			<div class="col col-lg-8">
				<div id='cssmenu'>
					<ul>
					   <li class='active'><a href='../index.html'>Home</a></li>
					   <li><a href='#'>Lost</a></li>
					   <li><a href='#'>Found</a></li>
						 <li><a href='post-create.html'>Create</a></li>
						 <li><a href='user-profile.html'>Profile</a></li>
					   <li><a href='#'>About</a></li>
					   <li><a href='#'>Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col col-lg-4">
				<div class="ui-widget">
  				<input id="search-box">
				</div>
				<button id="search-btn" onclick="searchWeb()"><span class="glyphicon glyphicon-search"></span></button>
			</div>
		</div>

		<div class="title">
			<img src="../images/Black-Logo.png" >
 		</div>

 		<div id="container">
 			<?php
 				include "../engine/db_connect.php";

				// Establishing connection with the database
 				//$db_conn = new DBConnection();
				//$posts = $db_conn -> getAllPosts();
				//$postsArr = array($posts);
				
 			?>
 			<div class="post-box">
				<a href="post-view.html"><h1 class="post-title">Post name</h1></a>	
	 			<hr>
	 			<div class="row">
	 				<div class="col col-lg-3">
			 			<img src="../images/Post-image.jpg">
	 				</div>
					<div class="col col-lg-8">
						<p>Demo text for a post</p>
					</div>
	 			</div>
	 		</div>
	 		<div class="post-box">
	 			<a href="post-view.html"><h1 class="post-title">Post name</h1></a>
	 			<hr>
				<div class="row">
	 				<div class="col col-lg-3">
		 				<img src="../images/Post-image.jpg">
	 				</div>
					<div class="col col-lg-8">
						<p>Demo text for a post</p>
					</div>
	 			</div>
	 		</div>
 		</div>
 		
 		<script src="../js/jquery-3.1.1.js"></script>
 		<script src="../js/navigation.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../js/posts.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "Found Husky",
      "Pig",
      "Dog",
      "Cat",
      "Chicken",
      "Horse",
      "Lost Bird"
    ];
    $( "#search-box" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
   	</body>

</html>
