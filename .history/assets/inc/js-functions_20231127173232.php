<?php
/*assets scripts*/

function carmen_arriaran_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adición a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la función wp_footer

    //Registrar Js
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', true);
    wp_register_script('fontawesome', 'https://kit.fontawesome.com/ef6bd8a4c0.js', true);
    wp_register_script('scrollreveal', 'https://unpkg.com/scrollreveal', true);
    wp_register_script('mi-js', get_bloginfo('template_directory') . '/assets/librerias/js/mis-scripts.js', array('jquery'), '1', true);
    
    //Encolar Js
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('fontawesome');
    wp_enqueue_script('scrollreveal');
    wp_enqueue_script('mi-js', array('jquery'), true);

    }
}
add_action("wp_enqueue_scripts", "carmen_arriaran_script", 1); //1 representa prioridad, mas alto el número = mas prioridad.