<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/header.php') ?>

<title>LifeBlog | Home </title>
</head>
<body>
<!-- container - wraps whole page -->
<div class="container">
    <?php include('includes/navbar.php') ?>

    <?php include('includes/banner.php') ?>
    <!-- Page content -->
    <div class="content">
        <h2 class="content-title">Recent Articles</h2>
        <hr>
        <!-- more content still to come here ... -->
    </div>
    <!-- // Page content -->

    <?php include('includes/footer.php') ?>
