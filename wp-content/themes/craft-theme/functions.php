<?php

register_nav_menus(array(
	'primary-menu' => 'Menú Primario',
));

add_theme_support('post-thumbnails');

function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'fa';
  return $classes;
}

add_filter('nav_menu_css_class','add_classes_on_li',1,3);

add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
     if ( is_page('contacto') )
          $classes[] = 'contact-page';
     return $classes;
}

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="evento"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="Craft"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image="http://example.com/image.jpg"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    }
    #set-post-thumbnail img[src$=".svg"] {
      width: 100%;
      height: auto;
      padding: 10px;
      background-color: gray;
    }
  </style>';
}

?>