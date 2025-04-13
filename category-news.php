<?php get_header(); ?>

<!-- Posts filtered to news, aka /news -->
 
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/news-style.css" type="text/css" media="screen" /> <!-- News stylesheet -->
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Master stylesheet -->

</head>

 <body id="page"> <!-- This indicates that the top header will be a little bit smaller on these pages -->

    <?php include('top.php') ?>

    <main>

        <?php
        $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'news',
            'posts_per_page' => 3,
            'paged' => $paged,
        );
        $arr_posts = new WP_Query( $args );
    
        if ( $arr_posts->have_posts() ) :

            echo '<h1>News</h1>';
    
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>

                <hr />

                <div class="entry" id="post-<?php the_ID(); ?>">
                
                    <h2><?php the_title(); ?> </h2>
                    <date>Posted on <?php echo get_the_date(); ?> by <?php the_author ('') ?> <?php edit_post_link('Edit', '&bull; ', ''); ?></date>
                
                        <?php the_content(); ?>
                        
                </div>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </main>

    <div class="pagebottom">

    <?php the_posts_pagination( array(
    'mid_size'  => 3,
    'prev_text' => __( '&laquo; Older', '' ),
    'next_text' => __( 'Newer &raquo;', '' ),
    ) ); ?>
    </div>

<?php get_footer(); ?>
 
    
            
            