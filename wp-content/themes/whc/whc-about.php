<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: WHC About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-default
 */

get_header();
?>

    <section>
        <div class="row">
          <div class="col-md-4">
                    
            <?php get_sidebar('1'); ?>
            </div>

            <div class="col-md-8">
            <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
            </div>

        </div>

    </section>

<?php
get_footer();
