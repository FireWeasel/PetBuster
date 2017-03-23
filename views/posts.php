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
		<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/posts.css">
		<link rel="stylesheet" type="text/css" href="../css/navigation.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
	</head>

	<body>
		<div class="row">
			<div class="col col-lg-8">
				<div id='cssmenu'>
					<ul>
					   <li class='active'><a href='../index.php'>Home</a></li>
					   <li><a href='#'>Lost</a></li>
					   <li><a href='#'>Found</a></li>
						 <li><a href='post-create.php'>Create</a></li>
						 <li><a href='user-profile.php'><?php echo $_SESSION['username'];?></a></li>
					   <li><a href='#'>About</a></li>
					   <li><a href='#'>Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col col-lg-4">
				<div class="ui-widget">
  				<input id="search-box">
				</div>
				<button id="search-btn" onclick="loadByAjax()"><span class="glyphicon glyphicon-search"></span></button>
			</div>
		</div>

		<div class="title">
			<img src="../images/Black-Logo.png" >
 		</div>

 		<div id="container">

 			<?php
 				include "../engine/db_connect.php";

 				$db_conn = new DBConnection();
				$posts = $db_conn -> getAllPosts();
 			?>
 			 <?php foreach ($posts as $value):  ?>
 			 <div class="post-box">
 			 <div class="post-title">
 			 <?php
 			 	include_once "../entities/post.php";
 			 ?>
 		     <a href="post-view.html"><h1 class="post-title"><?php echo $value -> getTitle();?></h1></a>
 		     </div>
 			 <hr>
 		     <div class="row">
 			 <div class="col col-lg-3">
 			 <img src="../images/Post-image.jpg">
 			 </div>
 			 <div class="col col-lg-8">
 			 <p><?php echo $value -> getDescription();?></p>
 			 </div>
	 		</div>
	 		</div>
	 		<?php endforeach; ?>

	 		<script src="../js/jquery-3.1.1.js"></script>
	 		<script src="../js/navigation.js"></script>
			<script src="../js/jquery-ui.js"></script>
			<script type="text/javascript">
				$(function() {
					var availableTags = [
							"Found Husky",
							"Pig",
							"Dog",
							"Cat",
							"Chicken",
							"Horse",
							"Lost Bird"
					];
					$("#search-box").autocomplete({
							source: availableTags
					});
				});
  		</script>
  		<script type="text/javascript">
				function loadByAjax() {
					$.ajax({
							type: "GET",
							url: "posts.php",
							data: "searchkey=data_from_user_input",
							success: function(response_data) {
									$('container').html(response_data)
							}
					});
				}
			</script>
   	</body>
</html>
