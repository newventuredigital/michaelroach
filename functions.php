<?php
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    add_theme_support( 'post-thumbnails' ); 

    function excerpt($limit) {
          $excerpt = explode(' ', get_the_excerpt(), $limit);
          if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).' &hellip;';
          } else { $excerpt = implode(" ",$excerpt);} 
          $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
          $link = get_the_permalink();
          $excerpt .= ' <a href="' . $link . '" class="read-more">Read More </a>';
          return $excerpt;
        }

        function content($limit) {
          $content = explode(' ', get_the_content(), $limit);
          if (count($content)>=$limit) {array_pop($content);
            $content = implode(" ",$content).'...';
          } else {$content = implode(" ",$content);
          } $content = preg_replace('/\[.+\]/','', $content);
          $content = apply_filters('the_content', $content); 
          $content = str_replace(']]>', ']]&gt;', $content);
          return $content;
        } 

  function my_theme_add_editor_styles() {
         add_editor_style( 'custom-editor-style.css' );
  add_action( 'admin_init', 'my_theme_add_editor_styles' );
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic' );
    add_editor_style( $font_url );
    }
    add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );
?>