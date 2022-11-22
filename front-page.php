<?php
/**
 * *
 * The template for displaying a static front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<?php get_header();?>

	<div class="content">

		<?php if ( have_posts () ) {

				while ( have_posts ()) {

					the_post();
					
					get_template_part( 'template-parts/content' , 'banner' );

					get_template_part( 'template-parts/content' , 'heading' );

                    get_template_part( 'template-parts/content' , 'services' );

					/* get_template_part( 'template-parts/content' , 'grid' );*/

                    get_template_part( 'template-parts/content' , 'contact' );
					
				}
			};?>

		</div>

<?php get_footer();?>