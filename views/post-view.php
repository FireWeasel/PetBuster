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
		<title>Post name</title>
		<link rel="stylesheet" type="text/css" href="../css/posts.css">
		<link rel="stylesheet" type="text/css" href="../css/post-view.css">
		<link rel="stylesheet" type="text/css" href="../css/navigation.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<script type="text/javascript" language="JavaScript" src="../js/jquery-3.1.1.js"></script>
	</head>

	<body>
		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='../index.php'>Home</a></li>
			   <li><a href='posts.php'>Lost</a></li>
			   <li><a href='posts.php'>Found</a></li>
				 <li><a href='user-profile.php'>Profile</a></li>
			   <li><a href='#'>About</a></li>
			   <li><a href='#'>Contact</a></li>
				 <li><a href='../engine/sign_out.php'>Sign out</a></li>
			</ul>
		</div>

		<div class="title">
			<img src="../images/White-Logo.png" >
 		</div>

 		<div id="container">
 		<?php 
 		include "../engine/db_connect.php";
 				$db_conn = new DBConnection();
				$posts = $db_conn -> getAllPosts();
				?>
			<div class="post-box">
			<?php
			include_once "../entities/post.php";
			$id = $_GET["id"];
			$item = NULL;
			foreach($posts as $post) {
    			if ($id == $post-> getID()) {
        			$item = $post;
        			break;
   				 }
					}
				?>
				<h1 class="post-title"><?php echo $item -> getTitle(); ?></h1>
				<hr>
				<div class="row">
					<div class="col col-lg-3">
						<img src="../images/Post-image.jpg">
					</div>
					<div class="col col-lg-8">
						<p><?php echo $item -> getDescription(); ?></p>
					</div>
				</div>
				<hr>
				<form action="#" id = "commentform">
	 			<div class="comment-form">
					<div class="row">
						<div class="col col-lg-8">
							<textarea id = "comment"></textarea><span id="commenterror" class="commenterror"></span>
						</div>
						<div class="col col-lg-4" style="height: 80px;">
		 					<button class="btn btn-primary" id = "commentbtn">Submit</button>
						</div>
					</div>
	 			</div>
				</form>
				<hr>
				<div class="comments">
					<div class="comment-box">
						<div class="row">
							<div class="col col-lg-3">
								<img src="../images/Post-image.jpg">
							</div>
							<div class="col col-lg-8">
								<p><b>Author, date</b></p>
								<p>Sample comment</p>
							</div>
						</div>
					</div>
				</div>
			</div>
 		</div>
		<script src="../js/validationcomment.js"></script>
 		<script src="../js/jquery-3.1.1.js"></script>
 		<script src="../js/navigation.js"></script>
 	</body>

</html>
