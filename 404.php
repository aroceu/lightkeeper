<!-- 
404 Error Page
-->

<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Master stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/base-style.css" type="text/css" media="screen" /> <!-- Base stylesheet for colors -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/error-style.css" type="text/css" media="screen" /> <!-- Error specific stylesheet -->

</head>

<body>

<main>

    <h1>404</h1>
    <h2>Page not found</h2>

    <div id="search">

    <?php get_search_form( ); ?>

    </div>

    <div id="bottom">
        <p><a href="javascript:history.go(-1)">&laquo; Go Back</a> &bull; <a href="<?php echo get_site_url(); ?>">Home</a></p>
    </div>

</main>

<?php get_footer(); ?>