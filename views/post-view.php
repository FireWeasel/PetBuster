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
			   <li class='active'><a href='posts.php?id=main'>Home</a></li>
			   <li><a href='posts.php?id=Lost'>Lost</a></li>
			   <li><a href='posts.php?id=Found'>Found</a></li>
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
 		$id = $_GET["id"];
 		include "../engine/db_connect.php";
 				$db_conn = new DBConnection();
				$posts = $db_conn -> getAllPosts($id);
				?>
			<div class="post-box">
			<?php
			include_once "../entities/post.php";

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
						<?php 
		 			 		$image = $item -> getImage();
		 			 		if(!empty($image)) {
		 			 			echo '<img style="width: 150px; height: 150px;" src="'.$image.'">';
		 			 		} else {
		 			 			echo '<img style="width: 150px; height: 150px;" src="../images/Post-image.jpg">';
		 			 		}
		 			 	?>

					</div>
					<div class="col col-lg-8">
						<p><?php echo $item -> getDescription(); ?></p>
					</div>
				</div>
				<hr>
				<form action="../engine/comment_create.php?post_id=<?php echo $id; ?>" id="commentform" method="post">
	 			<div class="comment-form">
					<div class="row">
						<div class="col col-lg-8">
							<textarea name="comment-body" id="comment"></textarea><span id="commenterror" class="commenterror"></span>
						</div>
						<div class="col col-lg-4" style="height: 80px;">
		 					<input type="submit" class="btn btn-primary" id="commentbtn"></input>
						</div>
					</div>
	 			</div>
				</form>
				<hr>
				<div class="comments">
					<?php
						include_once "../entities/comment.php";
						$comments = $db_conn -> getPostComments($id);
						foreach($comments as $comment):
					?>
						<div class="comment-box">
							<div class="row">
								<div class="col col-lg-3">
									<img src="../images/Post-image.jpg">
								</div>
								<div class="col col-lg-8">
									<p><b><?php echo $comment->getAuthor() ?>, <?php echo $comment->getTime(); ?></b></p>
									<p><?php echo $comment->getBody(); ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
 		</div>
		<script src="../js/validationcomment.js"></script>
 		<script src="../js/jquery-3.1.1.js"></script>
 		<script src="../js/navigation.js"></script>
 	</body>

</html>
