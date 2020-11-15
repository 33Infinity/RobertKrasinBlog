<?php  include('config.php'); ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php $topics = getAllTopics();?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Robert Krasin's Blog | About </title>
</head>
<body>
    <div class="container about">
        <?php include( ROOT_PATH . '/includes/navbar.php') ?>
        <h1 style="text-align:center;">About Rob Krasin</h1>
        <p>Rob Krasin is at once a seeker and dispenser of knowledge (frequently and mostly unsolicited). He grew
up on the East Coast, has been gone from there for millennia yet still retains a NYC, and more
specifically, Brooklyn sensibility. He is vitally interested in the world at-large, even though he actively
avoids unnecessary contact with other human beings. Some folks think he’s funny, most think he’s crazy,
but he prefers to believe pleasingly eccentric is the most reasonably appropriate descriptor.</p>
        <br>
        <p>
        Retired now, he had previously sought to impart wisdom to both young and old, some of which was well
absorbed, most of which engendered confusion, which may have been the point after all. He believes
obfuscation and transparency are DEFINTELY not mutually exclusive, and he endeavors to adhere to that
inclination whenever possible.
        </p>
        <br>
        <p>
        He believes himself to be worldly about affairs of state, political goings-on, educational matters, and
pretty much any other topic that might come to mind (very few others share that opinion, however). His
mission: expand his frequency, scope, and range of pontification, hopefully to the betterment of
everyone...
        </p>
        <br>
        <p>
        He has a cat (Bilbo) who is simultaneously his muse and principal antagonist; they share a large
comfortable home, existing in an uneasy armistice that periodically erupts into hostilities. It should also
be noted there may be times when said feline will editorialize, but this nonsensical activity, hopefully,
will be kept to a minimum...
        </p>
        <img style="width:49%" src="static/images/daddy.jpg"></img>
        <img style="width:49%" src="static/images/cat.jpg"></img>
    </div>
</body>
<!-- footer -->
<?php include( ROOT_PATH . '/includes/footer.php') ?>
<!-- // footer -->