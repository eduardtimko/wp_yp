<?php
// Добавление виджетов
require get_template_directory() . '/inc/sidebars.php';
// Конец добавление виджетов
// Добавление скриптов и стилей
require get_template_directory() . '/inc/registor_naw_manu.php';
// Конец добавление скриптов и стилей

// Добавление скриптов и стилей
require get_template_directory() . '/inc/style.php';
require get_template_directory() . '/inc/script.php';
// Конец добавление скриптов и стилей

// отключение текстового редактора wp
function disable_content_editor(){
        remove_post_type_support('page','editor');
}
add_action('admin_init', 'disable_content_editor');
// конец

 ?>
