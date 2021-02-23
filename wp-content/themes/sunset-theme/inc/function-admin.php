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
    add_submenu_page('sunset', 'Sunset Theme Option', 'Sidebar', 'manage_options', 'sunset', 'sunset_theme_create_page');
    add_submenu_page( 'sunset', 'Sunset Theme Options', 'Theme Options', 'manage_options', 'unset_theme', 'sunset_theme_support_page' );
    add_submenu_page('sunset', 'Sunset CSS Option', 'Custom CSS', 'manage_options', 'sunset_css', 'sunset_theme_settings_page');
    //Activate custom settings
}
add_action('admin_init', 'sunset_custom_settings');

//admin
function sunset_custom_settings() {
    //hooks from the settings API
    //sidebar options
    register_setting('sunset-settings-group', 'profile_picture');
    register_setting('sunset-settings-group', 'first_name');
    register_setting('sunset-settings-group', 'last_name');
    register_setting('sunset-settings-group', 'user_description');
    register_setting('sunset-settings-group', 'twitter_handler', 'sunset_sanitize_twitter_handler');
    register_setting('sunset-settings-group', 'facebook_handler');
    register_setting('sunset-settings-group', 'gplus_handler');


    add_settings_section('sunset-sidebar-options', 'Sidebar Options', 'sunset_sidebar_options', 'sunset');

    add_settings_field('sidebar-profile-picture', 'Profile Picture', 'sunset_sidebar_profile', 'sunset', 'sunset-sidebar-options');
    add_settings_field('sidebar-name', 'Full Name', 'sunset_sidebar_name', 'sunset', 'sunset-sidebar-options');
    add_settings_field('sidebar-description', 'Description', 'sunset_sidebar_description', 'sunset', 'sunset-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter Handler', 'sunset_sidebar_twitter', 'sunset', 'sunset-sidebar-options');
    add_settings_field('sidebar-facebook', 'Facebook Handler', 'sunset_sidebar_facebook', 'sunset', 'sunset-sidebar-options');
    add_settings_field('sidebar-gplus', 'GPlus Handler', 'sunset_sidebar_gplus', 'sunset', 'sunset-sidebar-options');


    //theme support options 
    register_setting( 'sunset-theme-support', 'post_formats' );
    add_settings_section( 'sunset-theme-options', 'Theme Options', 'sunset_theme_options', 'sunset_theme' );
    add_settings_field( 'post-formats', 'Post Formats', 'sunset_post_formats', 'sunset_theme', 'sunset-theme-options' );

}


//Post format callback function
function sunset_post_formats_callback($input) {
    return $input;
}

function sunset_theme_options() {
	echo 'Activate and Deactivate specific Theme Support Options';
}
function sunset_post_formats() {
	$options = get_option( 'post_formats' );
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
	}
	echo $output;
}


//sidebar options
//Media
function sunset_sidebar_profile() {
    $picture = esc_attr(get_option('profile_picture'));
    if(empty($picture)) {
        echo'<input type="button" class="button button-secondary" value="Upload a Profile Picture" id="upload-button"> <input type="hidden" id="profile_picture" name="profile_picture" value="">';
    } else {
        echo'<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"> <input type="hidden" id="profile_picture" name="profile_picture" value="' . $picture . '"> <input type="button" class="button button-secondary" value="Remove" id="remove-picture">';
    }
    
}

function sunset_sidebar_name() {
    $firstName = esc_attr(get_option('first_name'));
    $lastName = esc_attr(get_option('last_name'));
        echo'<input type="text" name="first_name" value="' . $firstName . '" placeholder="First Name">
             <input type="text" name="last_name" value="' . $lastName . '" placeholder="Last Name">';
    // echo '<input type="text" name="last_name" value="' . $lastName . '" placeholder="Last Name">';
}

function sunset_sidebar_facebook() {
    $facebook = esc_attr(get_option('facebook_handler'));
    echo'<input type="text" name="facebook_handler" value="' . $facebook . '" placeholder="Facebook Handler">';
}

//Twitter handler
function sunset_sidebar_twitter() {
    $twitter = esc_attr(get_option('twitter_handler'));
    echo'<input type="text" name="twitter_handler" value="' . $twitter . '" placeholder="Twitter Handler">
        <p style="font-style: italic;">@ symbol is prohibited</p>';
}

function sunset_sidebar_gplus() {
    $gplus = esc_attr(get_option('gplus_handler'));
    echo'<input type="text" name="gplus_handler" value="' . $gplus . '" placeholder="GPlus Handler">';
}

function sunset_sidebar_description() {
    $description = esc_attr(get_option('user_description'));
    echo'<input type="text" name="user_description" value="' . $description . '" placeholder="user description">';
}

function sunset_sidebar_options() {
    echo 'Customize your sidebar';
}

//get_template_directory_uri()
// echo sunset_add_admin_page();
add_action('admin_menu', 'sunset_add_admin_page');


//Sunset sanitation
function sunset_sanitize_twitter_handler($input) {
    // $input . 'HAHAHA';
    $output = sanitize_text_field($input);
    $output = str_replace('@', '', $input);
    // return $output . " Example concat string";
    return $output;
}



function sunset_theme_create_page() {
    //generation of our admin page
    // echo '<h1>General Page</h1>';
    require_once get_template_directory() . '/inc/templates/sunset-admin.php';
    
}

function sunset_theme_support_page() {
    require_once get_template_directory() . '/inc/templates/sunset-theme-support.php';
}

function sunset_theme_settings_page() {
    echo '<h1>CSS Page</h1>';

}