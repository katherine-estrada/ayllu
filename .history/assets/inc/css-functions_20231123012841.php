<?php
function css_carmen_arriaran(){
    //Registrar estilos
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    wp_register_style('iconos', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', 'all'); //Iconos Bootstrap
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Raleway:wght@400;500;600;700&display=swap', 'all'); //Iconos Bootstrap
    
    
    //Encolar estilos
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
    wp_enqueue_style('iconos');
    wp_enqueue_style('fuentes');
}

add_action('wp_enqueue_scripts', 'css_carmen_arriaran');
