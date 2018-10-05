<?php
function mriya_menu_setup(){

    register_nav_menu('primary', 'primary menu');

}


add_action('after_setup_theme', 'mriya_menu_setup');
?>
