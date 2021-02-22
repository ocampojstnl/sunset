<?php
/*
@package sunsettheme
    ==================
        ADMIN PAGE
    ==================
*/
function sunset_add_admin_page() {
    // return 'SAMPLE STRIN';

    add_menu_page('Sunset Theme Option', 'Sunset', 'manage_options', 'sunset', 'sunset_theme_create_page',  'dashicons-format-quote', 110);
}

//get_template_directory_uri()
// echo sunset_add_admin_page();
add_action('admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page() {
    //generation of our admin page
    
}