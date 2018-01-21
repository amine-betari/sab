<?php
/*
 * Template Name: Formation single Templates
 */
get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'none' ); ?>

			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary">
		<aside>
		<h3 class="widget-title"><span>Demander une formation</span></h3>
		<?php widgets_on_template("side bar left"); ?> <?php // spacious_sidebar_select(); ?>
		</aside>
	</div>
	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
