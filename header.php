<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-content">

        <?php
        wp_nav_menu( array(
            'theme_location' => 'header-menu', // Defined when registering the menu
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'depth'          => 2,
            'menu_class' => 'navbar-nav mr-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

