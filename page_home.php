<?php
/**
 * Template Name: Home Page
 *
 * @package BoldGrid
 */

get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; // end of the loop. ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .col -->
</div><!-- .row -->

<?php get_footer(); ?>
