<?php 
    $args = array( 
        'walker' => null, 
        'max_depth' => '', 
        'style' => 'ul', 
        'callback' => null, 
        'end-callback' => null, 
        'type' => 'all', 
        'page' => '', 
        'per_page' => '', 
        'avatar_size' => 20, 
        'reverse_top_level' => null, 
        'reverse_children' => '',
        'format' => current_theme_supports( 'html5', 'commentlist' ) ? 'html5' : 'xhtml', 
        'short_ping' => false, 
        'echo' => false,
    );  
    echo wp_list_comments($args,$comments);
?>
<?php 
    $form_args = array( 
        'label_submit' => 'Send', 
        'title_reply' => 'Write a Reply or Comment', 
        'comment_notes_after' => '', 
        'comment_field' => '<p class="comment-formcomment"><label for="Comment">'._x('Comment','noun').'</label><br /><textarea id="comment" name="comment" cols="70" rows="10" ariarequired="true"></textarea></p>', ); 
        comment_form($form_args); 
?>
