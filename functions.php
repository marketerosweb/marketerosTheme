<?php

function get_excerpt($count){  
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content(); 
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'... <a class="leer-mas" href="'.$permalink.'">Leer más</a>';
    return $excerpt;
}

function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
      'top_menu' => 'Menu de navegación superior',
    )
  );
}
add_action( 'init', 'mis_menus' );


 
function mk_widgets(){
  register_sidebar(
    array(
    	'name'          => ( 'Telefonos' ),
    	'id'            => 'pie-1',
    	'before_widget' => '<div class="widgets-pie
        ">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h3>',
    	'after_title'   => '</h3>',
    )
  );
    register_sidebar(
    
    array(
    	'name'          => ( 'Redes' ),
    	'id'            => 'pie-2',
    	'before_widget' => '<div class="widgets-pie redes">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h3>',
    	'after_title'   => '</h3>',
    )
  );
   register_sidebar(
    
    array(
    	'name'          => ( 'Telefonos-Top' ),
    	'id'            => 'top-tels',
    	'before_widget' => '<div class="widgets-top-tels">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h3>',
    	'after_title'   => '</h3>',
    )
  );
    register_sidebar(
    array(
    	'name'          => ( 'Copy' ),
    	'id'            => 'pie-3',
    	'before_widget' => '<div class="widgets-pie copy">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h3>',
    	'after_title'   => '</h3>',
    )
  );
}
add_action('init','mk_widgets');

add_theme_support( 'post-thumbnails' );

function buscar_solo_posts($query) {
  if($query->is_search) {
    $query->set('post_type','post');
  }
  return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');