<?php
/*assets scripts*/

// function ayllu_script()
// {
//     // nos aseguramos que no estamos en el area de administracion
//     if (!is_admin()) {
//         // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
//         // en adición a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la función wp_footer

//     //Registrar Js
//     wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', true);
//     wp_register_script('fontawesome', 'https://kit.fontawesome.com/ef6bd8a4c0.js', true);
//     wp_register_script('scrollreveal', 'https://unpkg.com/scrollreveal', true);
//     wp_register_script('mi-js', get_bloginfo('template_directory') . '/assets/librerias/js/mis-scripts.js', array('jquery'), '1', true);
    
//     //wp_register_script('three-js', 'https://unpkg.com/three@0.159.0/build/three.module.js', true);

   

    
    
//     //Encolar Js
//     wp_enqueue_script('bootstrap-js');
//     wp_enqueue_script('fontawesome');
//     wp_enqueue_script('scrollreveal');
//     wp_enqueue_script('mi-js', array('jquery'), true);
//     //wp_enqueue_script('three-js');
    
    



//     }
// }
// add_action("wp_enqueue_scripts", "ayllu_script", 1); 
// 1 representa la prioridad, cuanto mayor sea el número, mayor será la prioridad.
//add_action('wp_footer', 'include_threejs_addons');

function enqueue_threejs() {
    wp_enqueue_script('three-js', 'https://unpkg.com/three@0.159.0/build/three.module.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_threejs',1);



function include_threejs_addons() {
    ?>
    <script type="importmap">
        {
            "imports": {
                "three": "https://unpkg.com/three@0.159.0/build/three.module.js",
                "three/addons/": "https://unpkg.com/browse/three@0.159.0/examples/jsm/"
            }
        }
    </script>
    <?php
}
add_action('wp_footer', 'include_threejs_addons');
