<!-- 
Category Chapter 2 All Posts
-->

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/exhibit/styles/ch-2.css" type="text/css" media="screen" /> <!-- Chapter 2 stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Master stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/exhibit/style.css" type="text/css" media="screen" /> <!-- Chapter post master stylesheet -->

</head>

<body id="archive"> <!-- This indicates that the top header will be a little bit smaller on these pages -->

<?php include('templates/exhibit/header.php') ?>

<?php include('templates/exhibit/chapter-category-loop.php') ?>

<?php get_footer(); ?>