<!-- Must select on designated front page template AND select respective page as front page in WordPress-->

<?php
/**
* Template Name: Front Page
*
*/

get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/base-style.css" type="text/css" media="screen" /> <!-- Base stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Front matter stylesheet -->

</head>

<body id="index"> <!-- This is different to have the index page's top header be a little bigger -->

    <?php include('top.php') ?>

    <main>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
            <div id="entry">
            
                <h1><?php the_title(); ?> </h1>
            
                    <?php the_content(); ?>
                    
            </div>

        <?php endwhile; ?>
        <?php endif; ?>

    </main>

<?php get_footer(); ?>