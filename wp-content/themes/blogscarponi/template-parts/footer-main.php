<?php
  $copyright = get_field('footer_copyright', 'options');
  $site_info = get_field('footer_site_info', 'options');
  $logo = get_field('logo', 'options');
?>

<footer class="footer footer--main relative py2">
  <div class="clearfix mx-auto">
    <div class="col col-12 md-col-6 px2">
      <span class="footer__copyright inline-block">&copy;&nbsp;<?php echo Date('Y') . '&nbsp;' . $copyright; ?></span>
    </div>
    <div class="col col-12 md-col-6 px2 right-align">
      <span class="footer__mark inline-block"><?php _e('Made with ❤️ by Andrea Antonelli', 'blogscarponi'); ?></span>
    </div>
  </div>
</footer>
