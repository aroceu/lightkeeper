<!-- 
Page: Chapter Six
-->

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/exhibit/styles/ch-6.css" type="text/css" media="screen" /> <!-- Chapter 6 stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Master stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/exhibit/style.css" type="text/css" media="screen" /> <!-- Chapter post master stylesheet -->

</head>

<body id="archive"> <!-- This indicates that the top header will be a little bit smaller on these pages -->

<?php include('header.php') ?>

    <?php include('single-loop.php') ?>

<?php get_footer(); ?>