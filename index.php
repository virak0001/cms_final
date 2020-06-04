<?php get_header() ?>
    <div class="container">
        <div class="row">
        <div class="main">
                <div class="row">
                    <?php if(have_posts()){ ?>
                        <?php while (have_posts()) { ?>
                            <?php the_post() ?>
                            <div class="col-sm-4">
                                <?php if(has_post_thumbnail()){ ?>
                                    <img width="100%" height="auto" src=<?php the_post_thumbnail(); ?>
                                <?php } ?>
                            </div>
                            <div class="col-sm-8">
                                <a href="<?php the_permalink() ?>"><h6><?php the_title();?></h6></a>
                                <hr>
                                <p><?php the_excerpt();?></p>
                                Category: 
                                <?php
                                    $categories = get_the_category();
                                    $comma      = ', ';
                                    $output     = '';
                                    
                                    if ( $categories ) {
                                        foreach ( $categories as $category ) {
                                            $output .= '<a href="' . get_category_link( $category->term_id ) . '">' . 													$category->cat_name . '</a>' . $comma;
                                        }
                                        echo trim( $output, $comma );
                                } ?>
                                <br><br>
                            </div>
                                <?php } ?>
                        <?php }?>
                        </div>
                </div>
                <div class="sidebar ml-3 p-3">
                        <?php 
                        if(is_active_sidebar('sidebar')):
                        ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div>
        </div>
        </div> 
    </div>
</body>
</html>



