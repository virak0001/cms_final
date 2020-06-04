<html>
    <head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body>
        <?php get_header() ?>
        <?php if(is_active_sidebar('showcase')){
            dynamic_sidebar('showcase');
        } ?>

        <?php if(have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post() ?>
                    <div class="box">
                        <?php if($post->post_parent>0): ?>
                            <ul class="row">
                                <?php
                                    $args = array(
                                        'title_id' => '',
                                        'child_of' => idparent(),
                                    );
                                    wp_list_pages($args);
                                ?>
                            </ul>
                        <?php endif ?>
						<div class="container mt-2 bg-primary">
							 <?php
                            the_title();
                            the_content();
                        ?>
						</div>
                    </div>
            <?php endwhile ?>
        <?php endif ?>
       <div class="container">
            <div class="row ">
                 <div class="col-4 box1 p-1 bg-info">
            <?php 

               if(is_active_sidebar('box1')):
                    dynamic_sidebar('box1');
                endif;
                ?>
            </div>
            <div class="col-4 box2 p-1 bg-info">
            <?php 

               if(is_active_sidebar('box2')):
                    dynamic_sidebar('box2');
                endif;
                ?>
            </div>
            <div class="col-4 box3 p-1 bg-info">
            <?php 

               if(is_active_sidebar('box3')):
                    dynamic_sidebar('box3');
                endif;
                ?>
            </div>
          
            </div>
        
    </body>
</html