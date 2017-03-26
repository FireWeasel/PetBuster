 <?php
	session_start();
	session_regenerate_id();
	if(!isset($_SESSION['username'])) {
		header("Location:../views/access_denied.html");
	}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Posts</title>
		<link rel="stylesheet" type="text/css" href="../css/posts.css">
		<link rel="stylesheet" type="text/css" href="../css/post-create.css">
		<link rel="stylesheet" type="text/css" href="../css/navigation.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
	</head>

	<body>
		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='../index.php'>Home</a></li>
			   <li><a href='posts.php?id=Lost'>Lost</a></li>
			   <li><a href='posts.php?id=Found'>Found</a></li>
				 <li><a href='user-profile.php'>Profile</a></li>
			   <li><a href='#'>About</a></li>
			   <li><a href='#'>Contact</a></li>
				 <li><a href='../engine/sign_out.php'>Sign out</a></li>
			</ul>
		</div>

		<div class="title">
			<img src="../images/Black-Logo.png" >
 		</div>

 		<div id="container">
 			<div id="container-wrapper">
 				<h1>Create post</h1><hr>
				<form action="../engine/create_post.php" method="post" id = "form1">
					<label>Post title:</label>
					<input type="text" name="post-title" id ="title" class="postname"><span id = "Errorpostname" class="errorpostname"></span><br>
					<label>Description:</label>
					<textarea style="resize:none" name="post-description" id = "description" class="description"></textarea><span id="errordescription" class="errordescription"></span><br>
					<label>Post type:</label>
					<input type="radio" name="post-type" value="lost" checked>Lost
					<input type="radio" name="post-type" value="found">Found<br>
					<label>Date:</label>
					<input type="text" id="datepicker"><br>
					<input type="submit" value="submit" class="btn btn-primary" id = "submitbutton">
				</form>
				
			</div>
 		</div>

 		<script src="../js/jquery-3.1.1.js"></script>
		<script src="../js/validationpost.js"></script>
 		<script src="../js/navigation.js"></script>
		<script src="../js/jquery-ui.js"></script>
		<script>
		  $(function() {
		    $("#datepicker").datepicker();
		  });
  </script>
 	</body>

</html>
