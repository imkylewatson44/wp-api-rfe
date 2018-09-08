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
      <h1>Blog Posts</h1>
      <?php
        $args=array('order'=> 'DESC', 'posts_per_page'=>get_option('posts_per_page'));
        $query=new WP_Query($args);
          if( $query->have_posts()):
              while( $query->have_posts()): $query->the_post();
              {
                echo $post->post_title;
                echo $post->post_content;
              }
              endwhile;
          else:
          endif;
        ?>



    </div><!-- #content -->
  </div><!-- #primary -->


<?php get_footer(); ?>
