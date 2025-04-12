<!-- Header for chapter posts / chapter navigation -->

<div id="header">
        
        <div id="site">
            <a href="<?php echo get_site_url(); ?>/archive">
            <div id="logo"></div>
            <div id="name">Back to the Archives
                <br />&larr;
            </div>
            </a>
        </div>

    </div>

    <div id="navigation">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php printf("<span class='chapternav'>View all records from %s </span>", get_the_category_list(' ')); ?>



            <?php endwhile; ?>
            <?php endif; ?>
            </a>
        </div>
