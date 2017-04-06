<?php
/**
 * The template for displaying all single project posts and attachments
 *
 * @package understrap
 */

 get_header();
?>


<div class="hero-unit" style="background:url('<?php the_field('header_image'); ?>') no-repeat center center;">
	
</div>

<div class="wrapper" id="full-width-page-wrapper">

  <div class="container" id="content">

    <div class="col-md-12 content-area" id="primary">

      <main class="site-main" id="main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>


          <?php get_template_part( 'loop-templates/content', 'portfolio_cases' ); ?>        

        <?php endwhile; // end of the loop. ?>

      </main><!-- #main -->

    </div><!-- #primary -->

  </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
