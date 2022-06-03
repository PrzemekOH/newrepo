<?php

// add title tag
		add_theme_support( 'title-tag' );
// add thumbnails
		add_theme_support( 'post-thumbnails' );
    
add_theme_support( 'custom-header', array(
  'video' => true
));

// function mytheme_custom_excerpt_length( $length ) {
//     return 4;
// }
// add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
// add styles





function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


function fix_svg_thumb_display() {
  echo '

  ';
}
add_action('admin_head', 'fix_svg_thumb_display');


 
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf';
    
    
    // return
    return $path;
    
}
 

function acf_orphans($value, $post_id, $field) { if ( class_exists( 'iworks_orphan' ) ) { $orphan = new \iworks_orphan(); $value = $orphan->replace( $value ); } return $value; } add_filter('acf/format_value/type=textarea', 'acf_orphans', 10, 3); add_filter('acf/format_value/type=wysiwyg', 'acf_orphans', 10, 3);

function mycustom_wp_footer() 
{ ?>
    <script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) 
    {
      //Write a javascript code to download the file. 
    }  , false );
    </script>
<?php
}