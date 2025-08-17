<?php

/** SLUG    ID
 * news     20
 * i        11
 * ii       22
 * iii      23
 * iv       24
 * v        25
 * vi       26
 */

/** Custom Menus */
add_action( 'init', 'custom_menus' );
function custom_menus() {
   register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ), // main site nav
        )
    );
}

/**
 *  Search default only searches for archive entries
 * @param mixed $query
 */
function searchfilter( $query ) {

    if ( !$query->is_search )
        return $query;

        $query->set('post_type',array('post')); // posts only, no pages
        $term_ids = array( 20 ); // excludes news posts
        $taxquery = array(
        array(
            'taxonomy' => 'category', // taxonomy name
            'field' => 'id',
            'terms' => $term_ids,
            'operator'=> 'NOT IN'
        )
    );

    $query->set( 'tax_query', $taxquery );

}
add_action( 'pre_get_posts', 'searchfilter' );

/** Custom templates per chapter depending on their assigned category.  */

add_filter( 'single_template', function ( $template ) {

    global $post;

    if( has_category( 'launch', $post->ID ) ) {

        $new_template = locate_template( 'templates/exhibit/prologue.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    }   

    if( has_category( 'i', $post->ID ) ) {

        $new_template = locate_template( 'templates/exhibit/ch-1.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    }  

    if( has_category( 'ii', $post->ID ) ) {

        $new_template = locate_template( 'templates/exhibit/ch-2.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    } 

    if( has_category( 'iii', $post->ID ) ) {

        $new_template = locate_template( 'templates/exhibit/ch-3.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    } 

    if( has_category( 'iv', $post->ID ) ) {

        $new_template = locate_template( 'templates/exhibit/ch-4.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    } 

    if( has_category( 'v', $post->ID ) ) {

        $new_template = locate_template( 'templates/exhibit/ch-5.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    } 

    if( has_category( 'vi', $post->ID ) ) {

        $new_template = locate_template( 'templates/exhibit/ch-6.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    } 

    return $template;

});

/** add widgetized sidebar */

if ( function_exists('register_sidebar') )
register_sidebars(3,array(
 'name' => 'sidebar',
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
));

/** creating custom taxonomies */

function add_custom_taxonomies() {
    // Add new "Entry Type" taxonomy to Posts
    register_taxonomy('entry', 'post', array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
        'name' => _x( 'Entry Types', 'taxonomy general name' ),
        'singular_name' => _x( 'Entry Type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Entry Types' ),
        'all_items' => __( 'View All Entry Types' ),
        'edit_item' => __( 'Edit Entry Type' ),
        'update_item' => __( 'Update Entry Type' ),
        'add_new_item' => __( 'Add New Entry Type' ),
        'new_item_name' => __( 'New Entry Type' ),
        'menu_name' => __( 'Entry Types' ),
      ),
      // Control the slugs used for this taxonomy
      'rewrite' => array(
        'slug' => 'entry', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
      'show_ui' => true,
      'show_in_rest' => true,
      'show_admin_column' => true,
      'query_var' => true,
    ));
   
}
add_action( 'init', 'add_custom_taxonomies', 0 );

/** display category posts from oldest to newst */

function change_category_order( $query ) {
    //Sort all posts from category with id=4 (launch/prologue) by date asc order
    if($query->is_category('9') && $query->is_main_query()){
        $query->set( 'order', 'ASC' );
    } //Sort all posts from category with id=5 (chapter 1) by date asc order
    else if($query->is_category('11') && $query->is_main_query()){
        $query->set( 'order', 'ASC' );
    } // and so on....
    else if($query->is_category('22') && $query->is_main_query()){
        $query->set( 'order', 'ASC' );
    }
    else if($query->is_category('23') && $query->is_main_query()){
        $query->set( 'order', 'ASC' );
    }
    else if($query->is_category('24') && $query->is_main_query()){
        $query->set( 'order', 'ASC' );
    }
    else if($query->is_category('25') && $query->is_main_query()){
        $query->set( 'order', 'ASC' );
    }
    else if($query->is_category('26') && $query->is_main_query()){
        $query->set( 'order', 'ASC' );
    }

}
add_action( 'pre_get_posts', 'change_category_order' );

/** customize excerpt stuff */

function custom_wp_trim_excerpt($text) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        //Retrieve the post content. 
        $text = get_the_content('');
     
        //Delete all shortcode tags from the content. 
        $text = strip_shortcodes( $text );
     
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);
         
        $allowed_tags = '<p>,<a>,<em>,<strong>,<li>,<ul>,<ol>,<blockquote>,<img>,<h2>,<div>,<figure>'; 
        $text = strip_tags($text, $allowed_tags);
         
        $excerpt_word_count = 40; 
        $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
         
        $excerpt_end = '</blockquote></p><a class="readmore" href="'. get_permalink( get_the_ID() ) . '">Read more &raquo;</a>';
        $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
         
        $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
        if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
        } else {
            $text = implode(' ', $words);
        }
    }
    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
    }
    remove_filter('get_the_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');

?>