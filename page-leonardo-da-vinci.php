<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package midterm1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
            
                <?php the_title(); ?>
                <?php the_content();?>
			<?php endwhile; // End of the loop. ?>
            
            <?php rewind_post(); ?>
            
            <?php 

                $arg = array('post_type' => 'my_art', 'posts_per_page' => 10 );
                $loop = new WP_Query ( $arg );
                while ( $loop -> have_posts() ) : $loop->the_posts();

                echo '<div class="myLeoArt">';
                the_content();
                echo '</div>';
            
                endwhile; ?>
            
            
              <?php
            myRepeat(11);

               ?>

		</main><!-- #main -->
	</div><!-- #primary -->

