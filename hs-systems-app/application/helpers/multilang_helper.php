<?php
// Evita el acceso directo al archivo por seguridad
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Helper para establecer el idioma en la aplicación.
 *
 * Este helper detecta el idioma seleccionado por el usuario a través de un 
 * parámetro GET y carga el archivo de idioma correspondiente en CodeIgniter.
 */
function set_language() {
    // Obtener la instancia de CodeIgniter para acceder a sus librerías y funciones
    $CI =& get_instance(); 
    
    // Obtener el idioma desde la URL (Ejemplo: ?lang=en)
    // Se usa TRUE para aplicar filtrado de seguridad contra XSS
    $lang_x = $CI->input->get('lang', TRUE);

    // Si el parámetro GET 'lang' existe, lo usamos; de lo contrario, usamos 'es' (español por defecto)
    if ($lang_x) {
        $lang = $lang_x;
    } else {
        $lang = 'es'; // Idioma predeterminado
    }

    // Obtener el primer segmento de la URL (en este caso "test")
    $url_id = $CI->uri->segment(1); // `segment(1)` obtiene el primer segmento después de `index.php`

    // Si no hay un segmento válido, usa un valor por defecto (opcional)
    if (!$url_id) {
        $url_id = 'login'; // Puedes cambiar "default" por otro valor si lo necesitas
    }

    // Cargar el archivo de idioma correspondiente
    switch ($lang) {
        case 'en': // Si el idioma es inglés
            $CI->lang->load($url_id, 'english');
            break;
        case 'es': // Si el idioma es español
            $CI->lang->load($url_id, 'spanish'); 
            break;
        default: // Si el idioma no es reconocido, usamos español por defecto
            $CI->lang->load($url_id, 'spanish');
            break;
    }    
}
