<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'/admin/dashboard.php' ?>">
				<h1>Robert Krasin's Blog - Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Manage Users</a>
			<a href="posts.php">Manage Posts</a>
		</div>
	</div>
</body>
</html>
