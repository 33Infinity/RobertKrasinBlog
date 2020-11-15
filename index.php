<!-- The first include should be config.php -->
<?php require_once('config.php') ?> 
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<?php $topics = getAllTopics();?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>Robert Krasin's Blog | Home </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		 <?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<!-- banner -->
		<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->

		<!-- Page content -->
		<div class="content flex-child">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . '/filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
						<div class="info">
							<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
						</div>
					<?php endif ?>

					<a href="single_post.php?post=<?php echo $post['id']; ?>">
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
						</div>
					</a>
				</div>
			<?php endforeach ?>

		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include( ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->