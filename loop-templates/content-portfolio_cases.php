<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package understrap
 */
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header">

    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

  </header><!-- .entry-header -->

<!--   <div class="break-header">
    <img src="<?php the_field('header_image'); ?>" alt="">
  </div> -->

  <div class="entry-content">
    <?php the_content(); ?>

    <?php if( have_rows('gallery_block') ) :

            while ( have_rows('gallery_block') ) : the_row();

    ?>

              <img class="gallery_block_image" src="<?php the_sub_field('image'); ?>" >
    
    <?php
            endwhile;

    else :

    endif;

    ?>  

    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
        'after'  => '</div>',
      ) );
    ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->
