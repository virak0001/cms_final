<?php
  function menu(){
   register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
   ));
   }
   add_action('after_setup_theme','menu');

   function featureimg() {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(400,400);
  }
  add_action('after_setup_theme','featureimg');   
  
  function init_widget($id){
        register_sidebar(array(
            'name'=>'sidebar',
            'id'=>'sidebar',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h4 style="color:red">',
            'after_title'=>'</h4>',
        ));
        register_sidebar(array(
            'name'=>'Showcase',
            'id'=>'showcase',
            'before_widget'=>'<div class="showcase">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 style="color:red">',
            'after_title'=>'</h4>',
        ));
        register_sidebar(array(
            'name'=>'Box1',
            'id'=>'box1',
            'before_widget'=>'<div class="box1">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 style="color:white">',
            'after_title'=>'</h4>',
        ));
        register_sidebar(array(
            'name'=>'Box2',
            'id'=>'box2',
            'before_widget'=>'<div class="box2">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 style="color:white">',
            'after_title'=>'</h4>',
        ));
        register_sidebar(array(
            'name'=>'Box3',
            'id'=>'box3',
            'before_widget'=>'<div class="box3">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4 style="color:white">',
            'after_title'=>'</h4>',
        ));
       
    }
    add_action('widgets_init', 'init_widget');

	add_action('after_setup_theme', function() {
	$file = get_stylesheet_directory() . '/page.php';
	touch($file);
		
});
?>