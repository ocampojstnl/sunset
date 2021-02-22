<?php
/*
@package sunsettheme
    ==================
        ADMIN PAGE
    ==================
*/
function sunset_add_admin_page() {
    // return 'SAMPLE STRIN';
    //Generate sunset admin page
    add_menu_page('Sunset Theme Option', 'Sunset', 'manage_options', 'sunset', 'sunset_theme_create_page',  'dashicons-format-quote', 110);
    //generate sunset admin sub page
    add_submenu_page('sunset', 'Sunset Theme Option', 'General', 'manage_options', 'sunset', 'sunset_theme_create_page');
    add_submenu_page('sunset', 'Sunset CSS Option', 'Custom CSS', 'manage_options', 'sunset_css', 'sunset_theme_settings_page');

    //Activate custom settings
    add_action('admin_init', 'sunset_custom_settings');
}

function sunset_custom_settings() {
    //hooks from the settings API
    register_setting('sunset-settings-group', 'first_name');
    add_settings_section('sunset-sidebar-options', 'Sidebar Options', 'sunset_sidebar_options', 'sunset');
    add_settings_field('sidebar-name', 'First Name', 'sunset_sidebar_name', 'sunset', 'sunset-sidebar-options');
}

function sunset_sidebar_name() {
    $firstName = esc_attr(get_option('first_name'));
    echo '<input type="text" name="first_name" value="' . $firstName . '" placeholder="First Name">';
}

function sunset_sidebar_options() {
    echo 'Customize your sidebar';
}

//get_template_directory_uri()
// echo sunset_add_admin_page();
add_action('admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page() {
    //generation of our admin page
    // echo '<h1>General Page</h1>';
    require_once get_template_directory() . '/inc/templates/sunset-admin.php';
    
}

function sunset_theme_settings_page() {
    echo '<h1>CSS Page</h1>';

}