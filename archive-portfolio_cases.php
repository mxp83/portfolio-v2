<?php
/**
 * Template Name: Portfolio Cases Archive
 *
 * @package understrap
 */

 get_header();
?>

<div class="wrapper" id="full-width-page-wrapper">

  <di id="portfolio-cases">

      <main class="site-main" id="main" role="main">

          <?php if ( have_posts() ) : ?>
        
            <?php while ( have_posts() ) : the_post(); ?>

              <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'loop-templates/content', 'portfolio_archive' );
              ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

          <?php else : ?>

            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

          <?php endif; ?>

      </main><!-- #main -->

  </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
