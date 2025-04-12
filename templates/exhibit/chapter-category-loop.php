    <div class="pagetop">

        <?php the_posts_pagination( array(
        'mid_size'  => 3,
        'prev_text' => __( '&laquo; Older', '' ),
        'next_text' => __( 'Newer &raquo;', '' ),
        ) ); ?>
    
    </div>

    <main>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div id="entry">
        
        	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <h3><?php the_tags('',' ', ''); ?></h3>
        
        	    <?php the_content(); ?>

                </div>

                <hr />
        	    
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