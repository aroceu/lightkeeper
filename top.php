<!-- Top bar navigation -->
    
    <div id="header">
        
        <div id="site">
            <a href="<?php echo get_site_url(); ?>">
                <div id="logo"></div>
            </a>
            <a href="<?php echo get_site_url(); ?>">
                <div id="name"><?php bloginfo('name'); ?></div>
            </a>
        </div>

    </div>

    <div class="mobilenav">
		<button class="navigationbutton" onclick="toggleNavigation()">Navigation &#x25BC;</button>
	</div>

    <div id="navigation">
            <nav role="navigation" class="site-navigation main-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
            </nav>
        </div>
