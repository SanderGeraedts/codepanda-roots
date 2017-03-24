<header class="banner">
    <div class="container">
        <div class="row">
            <div class="logo col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/header/avatar.jpg' ?>" alt="A picture of my face" class="avatar" id="avatar">
                <p class="name">Sander Geraedts</p>
                <p class="function">Webdeveloper</p>
            </div>
            <nav class="nav-primary col-md-8">
                <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                <?php
				if (has_nav_menu('primary_navigation')) :
					wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
				endif;
				?>
            </nav>
        </div>
    </div>
</header>
