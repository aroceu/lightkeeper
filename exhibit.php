<?php
/**
 * Template Name: Exhibition Page, aka archive masterlist
 * Though the page is named Archive, its templates are named 'exhibit' due to WordPress restrictions.
 */

 /** SLUG    ID
 * news     20
 * i        11
 * ii       22
 * iii      23
 * iv       24
 * v        25
 * vi       26
 */
 
get_header(); ?>
 
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/exhibit-style.css" type="text/css" media="screen" /> <!-- Exhibit stylesheet (similar to base stylsheet, but with minor differences) -->
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <!-- Master stylesheet -->

</head>

 <body id="page"> <!-- This indicates that the top header will be a little bit smaller on these pages -->

    <?php include('top.php') ?>

    <main>

       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

       <div id="entry">
        
        <h1><?php the_title(); ?> </h1>
    
            <?php the_content(); ?>
            
        <?php endwhile; ?>
        <?php endif; ?>

        </div>

        <div id="exhibit">

        <?php get_search_form( ); ?>

<!-- Prologue Masterlist -->

[catlist id=11 orderby=ID]

<!-- Chapter One Masterlist (for the corresponding category, edit i ('category_name' and 'get_category_by_slug') to match the slug 
                    and 11 ($id()) to match the ID# for the corresponding category) -->
            <?php
            $args = array( 'category_name' => 'i', 
            'post_type' =>  'post', 
            'orderby'    => 'menu_order',
            'sort_order' => 'ASC',
            'numberposts' => '-1'); 
            $postslist = get_posts( $args );    
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
                $id = 11;
                $cat_link = '';
                $category_object = get_category_by_slug( 'i' );
                if ( $category_object instanceof WP_Term ) {
                    $category_link = get_category_link( $category_object->term_id );
                echo '<a href="' . $category_link . '"><h2>' . get_cat_name($id) . '</a></h2>';
                }

            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <h3>
                <span class="type"><?php the_terms( get_the_id(), 'entry', __( " " ), " " ); ?></span>
                <span class="tag"><?php the_tags('',' ', ''); ?></span>   
                <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            </h3> 
            <?php endforeach; ?> 
            <?php
                wp_reset_postdata();
            endif;
            ?>

<!-- Chapter Two Masterlist (for the corresponding category, edit ii ('category_name' and 'get_category_by_slug') to match the slug 
                    and 22 ($id()) to match the ID# for the corresponding category) -->
            <?php
            $args = array( 'category_name' => 'ii', 
            'post_type' =>  'post', 
            'orderby'    => 'menu_order',
            'sort_order' => 'ASC',
            'numberposts' => '-1'); 
            $postslist = get_posts( $args );    
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
                $id = 22;
                $cat_link = '';
                $category_object = get_category_by_slug( 'ii' );
                if ( $category_object instanceof WP_Term ) {
                    $category_link = get_category_link( $category_object->term_id );
                echo '<a href="' . $category_link . '"><h2>' . get_cat_name($id) . '</a></h2>';
                }

            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <h3>
                <span class="type"><?php the_terms( get_the_id(), 'entry', __( " " ), " " ); ?></span>
                <span class="tag"><?php the_tags('',' ', ''); ?></span>   
                <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            </h3> 
            <?php endforeach; ?> 
            <?php
                wp_reset_postdata();
            endif;
            ?>

<!-- Chapter Three Masterlist (for the corresponding category, edit iii ('category_name' and 'get_category_by_slug') to match the slug 
                    and 23 ($id()) to match the ID# for the corresponding category) -->
                    <?php
            $args = array( 'category_name' => 'iii', 
            'post_type' =>  'post', 
            'orderby'    => 'menu_order',
            'sort_order' => 'ASC',
            'numberposts' => '-1'); 
            $postslist = get_posts( $args );    
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
                $id = 23;
                $cat_link = '';
                $category_object = get_category_by_slug( 'iii' );
                if ( $category_object instanceof WP_Term ) {
                    $category_link = get_category_link( $category_object->term_id );
                echo '<a href="' . $category_link . '"><h2>' . get_cat_name($id) . '</a></h2>';
                }

            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <h3>
                <span class="type"><?php the_terms( get_the_id(), 'entry', __( " " ), " " ); ?></span>
                <span class="tag"><?php the_tags('',' ', ''); ?></span>   
                <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            </h3> 
            <?php endforeach; ?> 
            <?php
                wp_reset_postdata();
            endif;
            ?>

<!-- Chapter Four Masterlist (for the corresponding category, edit iv ('category_name' and 'get_category_by_slug') to match the slug 
                    and 24 ($id()) to match the ID# for the corresponding category) -->
                    <?php
            $args = array( 'category_name' => 'iv', 
            'post_type' =>  'post', 
            'orderby'    => 'menu_order',
            'sort_order' => 'ASC',
            'numberposts' => '-1'); 
            $postslist = get_posts( $args );    
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
                $id = 24;
                $cat_link = '';
                $category_object = get_category_by_slug( 'iv' );
                if ( $category_object instanceof WP_Term ) {
                    $category_link = get_category_link( $category_object->term_id );
                echo '<a href="' . $category_link . '"><h2>' . get_cat_name($id) . '</a></h2>';
                }

            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <h3>
                <span class="type"><?php the_terms( get_the_id(), 'entry', __( " " ), " " ); ?></span>
                <span class="tag"><?php the_tags('',' ', ''); ?></span>   
                <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            </h3> 
            <?php endforeach; ?> 
            <?php
                wp_reset_postdata();
            endif;
            ?>

<!-- Chapter Five Masterlist (for the corresponding category, edit v ('category_name' and 'get_category_by_slug') to match the slug 
                    and 25 ($id()) to match the ID# for the corresponding category) -->
                    <?php
            $args = array( 'category_name' => 'v', 
            'post_type' =>  'post', 
            'orderby'    => 'menu_order',
            'sort_order' => 'ASC',
            'numberposts' => '-1'); 
            $postslist = get_posts( $args );    
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
                $id = 25;
                $cat_link = '';
                $category_object = get_category_by_slug( 'v' );
                if ( $category_object instanceof WP_Term ) {
                    $category_link = get_category_link( $category_object->term_id );
                echo '<a href="' . $category_link . '"><h2>' . get_cat_name($id) . '</a></h2>';
                }

            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <h3>
                <span class="type"><?php the_terms( get_the_id(), 'entry', __( " " ), " " ); ?></span>
                <span class="tag"><?php the_tags('',' ', ''); ?></span>   
                <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            </h3> 
            <?php endforeach; ?> 
            <?php
                wp_reset_postdata();
            endif;
            ?>

<!-- Chapter Six Masterlist (for the corresponding category, edit vi ('category_name' and 'get_category_by_slug') to match the slug 
                    and 26 ($id()) to match the ID# for the corresponding category) -->
                    <?php
            $args = array( 'category_name' => 'vi', 
            'post_type' =>  'post', 
            'orderby'    => 'menu_order',
            'sort_order' => 'ASC',
            'numberposts' => '-1'); 
            $postslist = get_posts( $args );    
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
                $id = 26;
                $cat_link = '';
                $category_object = get_category_by_slug( 'vi' );
                if ( $category_object instanceof WP_Term ) {
                    $category_link = get_category_link( $category_object->term_id );
                echo '<a href="' . $category_link . '"><h2>' . get_cat_name($id) . '</a></h2>';
                }

            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <h3>
                <span class="type"><?php the_terms( get_the_id(), 'entry', __( " " ), " " ); ?></span>
                <span class="tag"><?php the_tags('',' ', ''); ?></span>   
                <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            </h3> 
            <?php endforeach; ?> 
            <?php
                wp_reset_postdata();
            endif;
            ?>

        </div>


    </div>

    </main>

<?php get_footer(); ?>
 
    
            
            