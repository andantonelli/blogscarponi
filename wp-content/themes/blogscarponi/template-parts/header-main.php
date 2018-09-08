<header class="header header--main" role="banner">
  <div class="header__inner px2 py2">
    <!-- <div>
      <a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php echo get_field('logo', 'options'); ?>"/>
      </a>
    </div> -->

    <nav class="header__nav" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
    </nav>
  </div>
</header>
