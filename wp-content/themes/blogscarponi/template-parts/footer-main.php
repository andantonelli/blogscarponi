<?php
  $copyright = get_field('footer_copyright', 'options');
  $site_info = get_field('footer_site_info', 'options');
  $logo = get_field('logo', 'options');
?>

<footer class="footer footer--main relative">
  <div class="clearfix max-width-5 mx-auto">
    <div class="col col-12 md-col-3 px2 mb2 md-mb0">
      <?php if($logo) echo '<img class="footer__logo" src="' . $logo . '" alt="logo" title="logo" />'; ?>
    </div>
    <div class="col col-12 md-col-3 px2 mb2 md-mb0">
      <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'footer-menu')); ?>
    </div>
    <div class="col col-12 md-col-3 px2 mb2 md-mb0">
      <?php if($site_info) echo '<div class="footer__info wysiwyg">' . $site_info . '</div>'; ?>
    </div>
    <div class="col col-12 md-col-3 px2 mb2 md-mb0">
      <?php get_template_part('template-parts/block', 'social'); ?>
    </div>
  </div>
</footer>
