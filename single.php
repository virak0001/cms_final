<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <style>
      .size-large{
        width: 100%;
      }
    </style>
</head>
<body>
   
    <?php get_header()?>

     <div class="container">
         <?php if(have_posts()){ ?>
         <?php the_post(); ?>
            <div class="main">

            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a> 
            
            <p><?php the_content();?></p>
            Category:
            <?php
                $categories = get_the_category();
                $comma      = ', ';
                $output     = '';
                
                if ( $categories ) {
                    foreach ( $categories as $category ) {
                        $output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
                    }
                    echo trim( $output, $comma );
                } ?>    
            <p> <strong>Writen by: </strong> <?php the_author(); ?> <strong>Date: </strong><?php the_date(); ?></p>            				<?php   comments_template(); ?>
            </div>
			
         <?php } ?>      
</div>
</body> 
</html>