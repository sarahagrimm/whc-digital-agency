<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: WHC Services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-default
 */

get_header();
?>

    <section>
        <div class="container">
        <div class="row">
        <article class="mx-auto">

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
        </article>

        </div>
        <div class="row">


            <?php $serviceArgs = array(
                'post_type' =>'_services',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );
            $services = new WP_Query($serviceArgs);
            ?>

            <?php if($services -> have_posts()):while($services -> have_posts()):$services -> the_post() ?>
            <div class="col-md-4 text-center">

                <div class="img-box">
                    <?php the_post_thumbnail();?>
                </div>

                <p>
                    <?php the_content();?>
                </p>
            </div>
            <?php endwhile; endif; ?>
    
        </div>
            <div class="col-md-4">

            <?php get_sidebar('2'); ?>
            </div>
            </div>

    </section>

<?php
get_footer();