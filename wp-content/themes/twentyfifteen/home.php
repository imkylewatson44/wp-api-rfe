<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

// Sets the ACF Banner image to the
$image = get_field('image');

if( !empty($image) ): ?>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">
      <h1>TEST</h1>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->


<?php get_footer(); ?>
