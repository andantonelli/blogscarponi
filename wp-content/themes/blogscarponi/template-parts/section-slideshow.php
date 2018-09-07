<?php if( get_field('slideshow') ): ?>
    <div class="slides">
      <?php while( has_sub_field('slideshow') ): ?>
    	  <?php
    		// vars
        $title = get_sub_field('title');
        $abstract = get_sub_field('abstract');
        $link = get_sub_field('link');
    		$image = get_sub_field('image');
    		?>
    		<article>
          <header>
            <div class="container">
              <h2 class="bottom-line"><?php echo $title;?></h2>
              <?php if($abstract): ?>
                <p><?php echo $abstract;?></p>
              <?php endif; ?>
              <?php if($link): ?>
                <a href="<?php echo $link;?>">Show more</a>
              <?php endif; ?>
            </div>
          </header>
          <?php echo fly_get_attachment_image( $image['ID'], array( 1680, 750 ), true ); ?>
        </article>

    	<?php endwhile; ?>
    </div>
<?php endif; ?>
