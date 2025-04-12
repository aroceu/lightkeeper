<?php
/** Search Results */

get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/base-style.css" type="text/css" media="screen" /> <!-- Base stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Master stylesheet -->

<style type="text/css">

h1{
        padding-bottom: 0;
    }

h2{
    font-family: 'Playfair'!important;
    letter-spacing: 0!important;
    font-style: italic!important;
}

#viewresults{
    text-decoration: none!important;
}

h2::before, h2::after{
    content: ' - ';
}

</style>

</head>

<body id="page"> <!-- This indicates that the top header will be a little bit smaller on these pages -->

    <?php include('top.php') ?>

    <div class="pagetop">

    <?php the_posts_pagination( array(
    'mid_size'  => 3,
    'prev_text' => __( '&laquo; Older', '' ),
    'next_text' => __( 'Newer &raquo;', '' ),
    ) ); ?>

    </div>

    <main>

        <div id="viewresults"><h2>Displaying <?php
            if ( !is_paged() ) {
            // first page of pagination
            $first_post = absint( $wp_query->get('paged') - 1 );
            $last_post = $first_post + $wp_query->post_count - 1;
            $all_posts = $wp_query->found_posts;
        } else {
            $first_post = absint( $wp_query->get('paged') - 1 ) * $wp_query->get('posts_per_page') + 1;
            $last_post = $first_post + $wp_query->post_count - 1;
            $all_posts = $wp_query->found_posts;
        } 
        ?>
        <?php echo $first_post . '-' . $last_post; ?> of <?php echo $all_posts; ?> search results for <b>"<?php the_search_query(); ?>"</b></h2></div>

        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <hr />

        <div class="entry">
        
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <h5><?php printf(" <span class='chapter'>%s</span>", get_the_category_list(' ')); ?> &bull; <?php the_tags('',' ', ''); ?></h5>
        
            <?php the_excerpt(); ?>

        </div>

        <?php endwhile; ?>
        <?php endif; ?>

    </main>

    <div class="pagebottom">

    <?php the_posts_pagination( array(
    'mid_size'  => 3,
    'prev_text' => __( '&laquo; Older', '' ),
    'next_text' => __( 'Newer &raquo;', '' ),
    ) ); ?>
    </div>

<?php get_footer(); ?>