<?php
function mi_tema_agregar_estilos() {
    wp_enqueue_style('estilo-principal', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_agregar_estilos');


function axel_custom_scripts() {
    wp_enqueue_script('mi-script', get_template_directory_uri() . '/js/mi-script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'axel_custom_scripts');

function axel_home_scripts() {
  if (is_front_page()) {
    wp_enqueue_script(
      'reproductor-home',
      get_template_directory_uri() . '/js/reproductor-home.js',
      array(),
      null,
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'axel_home_scripts');



?>