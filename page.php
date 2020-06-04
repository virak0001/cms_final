<?php get_header(); ?>
    <div class="container">
        <?php if(have_posts()):?>
      <?php  while(have_posts()):?>
        <?php the_post();?>
        <?php 
        global $post;
        $id = $post->ID;
        $args = array(
          'title_li'=> '',
          'child_of' => $id,
        );
        wp_list_pages($args);
        the_content();
        ?>
       <?php endwhile;?>
       <?php else:
        echo "Post not found";
       endif;
       ?>
    </div>
</body>
</html>