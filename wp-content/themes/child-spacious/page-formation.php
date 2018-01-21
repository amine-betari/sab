<?php
/*
 * Template Name: Formation templates
 */
get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<h2 style="text-align: center;"><span style="color: #0fbe7c;">Vous voulez avancer dans votre carrière en tant que développeur web ?</span></h2>
			<p>Nous vous proposons des formations centrée sur les technologies et langages de l’Open Source.</p>
			<!-- iso top -->
			<?php 
			// Set up the objects needed
			$my_wp_query = new WP_Query();
			$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1','orderby'=>"menu_order",'order' => 'ASC',));
			$childPages = get_page_children( $post->ID,  $all_wp_pages);
			?>
			<div class="grid">
			<?php foreach($childPages as $key => $page): ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large' );?>
				<div class="grid-item">
					<div class='illustration'>
						<a href="<?php the_permalink($page->ID)?>">
						<img sizes="(max-width: 270px) 100vw, 270px" 
						class="illustration attachment-featured-blog-medium size-featured-blog-medium wp-post-image" 
						src="<?php echo $thumb[0]; ?>" width="270" height="270" alt="" title="" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			<?php endforeach; ?>
			</div>
			<!-- iso top -->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php // spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>
<script type="text/javascript">
<!--
jQuery(document).ready(function(){
	jQuery('.grid').isotope({
		// options
		itemSelector: '.grid-item',
		layoutMode: 'fitRows'
	});
});
//--></script>
<?php get_footer(); ?>
