<?php
/*
 * Template Name: Blog Page
 * Template Post Type: post, page, product
 */

 get_header();  ?>

 <div id="primary" class="site-content">
   <div id="content" role="main">
     <h1>Blog Post</h1>
      <!-- Echo out the post content and publish date -->
      <?php  echo $post->post_content;?>
      <li class="icon-date"><?php echo get_the_date('Y-m-d');?></li>
      <!--  Publish Time-->
      <li class="icon-time"><?php the_time('H:i:s');?></li>


   </div><!-- #content -->
 </div><!-- #primary -->
