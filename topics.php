<?php  include('config.php'); ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php $topics = getAllTopics();?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>Robert Krasin's Blog | Home </title>
</head>
<body>
    <!-- post sidebar -->
    <div class="post-sidebar">
        <div class="card">
            <div class="card-header">
                <h2>Topics</h2>
            </div>
            <div class="card-content">
                <?php foreach ($topics as $topic): ?>
                    <a 
                        href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
                        <?php echo $topic['name']; ?>
                    </a> 
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- // post sidebar -->
</body>
<!-- footer -->
<?php include( ROOT_PATH . '/includes/footer.php') ?>
<!-- // footer -->