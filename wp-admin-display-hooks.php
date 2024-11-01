<?php
/*
Plugin Name: WP Admin Display Hooks
Plugin URI: http://github.com/wpmark/show-admin-display-hooks
Description: Make visible all the hooks in the WordPress admin area that are available for outputting content on different admin screens.
Version: 0.1
Author: Mark Wilkinson
Author URI: http://markwilkinson.me
License: GPLv2 or later
*/
 
function mdw_in_admin_header() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">in_admin_header</pre>';
	
}
 
add_action( 'in_admin_header', 'mdw_in_admin_header' );
 
function mdw_network_admin_notices() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">network_admin_notices</pre>';
	
}
 
add_action( 'network_admin_notices', 'mdw_network_admin_notices' );
 
function mdw_user_admin_notices() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">user_admin_notices</pre>';
	
}
 
add_action( 'user_admin_notices', 'mdw_user_admin_notices' );
 
function mdw_admin_notices() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">admin_notices</pre>';
	
}
 
add_action( 'admin_notices', 'mdw_admin_notices' );
 
function mdw_all_admin_notices() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">all_admin_notices</pre>';
	
}
 
add_action( 'all_admin_notices', 'mdw_all_admin_notices' );
 
function mdw_edit_form_top() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_form_top</pre>';
	
}
 
add_action( 'edit_form_top', 'mdw_edit_form_top' );
 
function mdw_edit_form_after_title() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_form_after_title</pre>';
	
}
 
add_action( 'edit_form_after_title', 'mdw_edit_form_after_title' );
 
function mdw_edit_form_after_editor() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_form_after_editor</pre>';
	
}
 
add_action( 'edit_form_after_editor', 'mdw_edit_form_after_editor' );
 
function mdw_submitpage_box() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">submitpage_box</pre>';
	
}
 
add_action( 'submitpage_box', 'mdw_submitpage_box' );
 
function mdw_submitpost_box() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">submitpost_box</pre>';
	
}
 
add_action( 'submitpost_box', 'mdw_submitpost_box' );
 
function mdw_edit_page_form() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_page_form</pre>';
	
}
 
add_action( 'edit_page_form', 'mdw_edit_page_form' );
 
function mdw_edit_form_advanced() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_form_advanced</pre>';
	
}
 
add_action( 'edit_form_advanced', 'mdw_edit_form_advanced' );
 
function mdw_dbx_post_sidebar() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">dbx_post_sidebar</pre>';
	
}
 
add_action( 'dbx_post_sidebar', 'mdw_dbx_post_sidebar' );
 
function mdw_edit_category_form_pre() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_category_form_pre</pre>';
	
}
 
add_action( 'edit_category_form_pre', 'mdw_edit_category_form_pre' );
 
function mdw_edit_link_category_form_pre() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_link_category_form_pre</pre>';
	
}
 
add_action( 'edit_link_category_form_pre', 'mdw_edit_link_category_form_pre' );
 
function mdw_edit_tag_form_pre() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">edit_tag_form_pre</pre>';
	
}
 
add_action( 'edit_tag_form_pre', 'mdw_edit_tag_form_pre' );
 
function mdw_category_pre_edit_form() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">{$taxonomy}_pre_edit_form</pre>';
	
}
 
add_action( 'category_pre_edit_form', 'mdw_category_pre_edit_form' );
 
function mdw_welcome_panel() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">welcome_panel</pre>';
	
}
 
add_action( 'welcome_panel', 'mdw_welcome_panel' );
 
function mdw_myblogs_allblogs_options() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">myblogs_allblogs_options</pre>';
	
}
 
add_action( 'myblogs_allblogs_options', 'mdw_myblogs_allblogs_options' );
 
function mdw_after_menu_locations_table() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">after_menu_locations_table</pre>';
	
}
 
add_action( 'after_menu_locations_table', 'mdw_after_menu_locations_table' );
 
function mdw_blog_privacy_selector() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">blog_privacy_selector</pre>';
	
}
 
add_action( 'blog_privacy_selector', 'mdw_blog_privacy_selector' );
 
function mdw_pre_current_active_plugins() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">pre_current_active_plugins</pre>';
	
}
 
add_action( 'pre_current_active_plugins', 'mdw_pre_current_active_plugins' );
 
function mdw_tool_box() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">tool_box</pre>';
	
}
 
add_action( 'tool_box', 'mdw_tool_box' );
 
function mdw_core_upgrade_preamble() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">core_upgrade_preamble</pre>';
	
}
 
add_action( 'core_upgrade_preamble', 'mdw_core_upgrade_preamble' );
 
function mdw_admin_color_scheme_picker() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">admin_color_scheme_picker</pre>';
	
}
 
add_action( 'admin_color_scheme_picker', 'mdw_admin_color_scheme_picker' );
 
function mdw_personal_options() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">personal_options</pre>';
	
}
 
add_action( 'personal_options', 'mdw_personal_options' );
 
function mdw_profile_personal_options() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">profile_personal_options</pre>';
	
}
 
add_action( 'profile_personal_options', 'mdw_profile_personal_options' );
 
function mdw_show_user_profile() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">show_user_profile</pre>';
	
}
 
add_action( 'show_user_profile', 'mdw_show_user_profile' );
 
function mdw_edit_user_profile() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">show_edit_profile</pre>';
	
}
 
add_action( 'show_edit_profile', 'mdw_edit_user_profile' );
 
function mdw_user_new_form() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">user_new_form</pre>';
	
}
 
add_action( 'user_new_form', 'mdw_user_new_form' );
 
function mdw_widgets_admin_page() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">widgets_admin_page</pre>';
	
}
 
add_action( 'widgets_admin_page', 'mdw_widgets_admin_page' );
 
function mdw_sidebar_admin_page() {
	
	echo '<pre style="margin: 0; padding: 0; font-size: 1.4em; color: red;">sidebar_admin_page</pre>';
	
}
 
add_action( 'sidebar_admin_page', 'mdw_sidebar_admin_page' );