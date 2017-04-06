<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying the front page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">

		<div class="temp-circle"></div><!-- not permanent -->
		<p class="lead text-center">Hi!  I am Marco Payumo, and I am a UI/UX and graphic designer from Vancouver, BC, Canada.</p>

		<p class="lead text-center">I am skilled in various areas, ranging from design, to html and css + javascript, and have experience building Wordpress sites.</p>
	</div>
</div>

<div class="wrapper portfolio-text" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'front' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php custom_portfolio_cases(); ?>

<div class="wrapper skillset-text">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php the_field('skillset_text'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
