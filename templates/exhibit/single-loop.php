    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main>
        
        <div id="entry">
        
        	<h1><?php the_title(); ?> </h1>
            <h3><?php the_tags('',' ', ''); ?></h3>
        
        	    <?php the_content(); ?>

        </div>

    </main>

        <div class="pagebottom">

            <div class="prev-entry">              
            <?php
            $previous_post = get_previous_post(true,'','category');
            if ( ! empty( $previous_post ) ) : ?>
                <a href="<?php echo get_permalink( $previous_post->ID ); ?>">&larr; Previous Entry</a>
            <?php endif; ?>
            </div>

            <div class="next-entry">
            <?php
            $next_post = get_next_post(true,'','category');
            if ( ! empty( $next_post ) ) : ?>
                <a href="<?php echo get_permalink( $next_post->ID ); ?>">Next Entry &rarr;</a>
            <?php endif; ?>
            </div>

        </div>

        <?php endwhile; ?>
        <?php endif; ?>