<!-- 
Page: Site Front Matter
-->

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/base-style.css" type="text/css" media="screen" /> <!-- Base stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Master stylesheet -->

</head>

<body id="page"> <!-- This indicates that the top header will be a little bit smaller on these pages -->

    <?php include('top.php') ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main>
        
        <div id="entry">
        
        	<h1><?php the_title(); ?> </h1>
        
        	    <?php the_content(); ?>
        	    
        	<?php endwhile; ?>
            <?php endif; ?>

        </div>

    </main>

<?php get_footer(); ?>