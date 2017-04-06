<?php
/**
 * @package understrap
 */
?>
<article <?php post_class('col-sm-12 col-md-6 case_item'); ?> id="post-<?php the_ID(); ?>">
  <div class="case_img" style="background-image: url('<?php the_field('header_image', $post->ID); ?>')">
      <a class="case_link" href="<?php the_permalink(); ?>"></a>
  </div>
  <div class="case_text">
      <?php the_title( sprintf( '<h5 class="entry-title">' ), '</h5>' ); ?>
  </div>
</article><!-- #post-## -->