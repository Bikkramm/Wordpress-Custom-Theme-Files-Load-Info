<?php
function myscript() {
    wp_enqueue_script(
        'my-js',
        get_template_directory_uri() . '/my.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'myscript');
?>
