<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
   
</head>
<body>
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
    ?>
                 <a href="<?php the_permalink(); ?>"><?php the_title();?></a><br> 
                    <?php the_tags();  
                    $caters = get_the_category();
                    if($caters){
                        foreach($caters as $cater){
                    ?>
                    <br>
                        Category: <a href="<?php ?>"><?php echo $cater->cat_name ?></a>
                    <?php
                        }
                    }
                    ?>
             
    <?php
            }
        }
    ?>
</body>
</html>