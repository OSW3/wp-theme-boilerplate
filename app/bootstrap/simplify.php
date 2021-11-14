<?php
/**
 * WP Simplify - by OSW3
 * Plugin URI: http://osw3.net/wp/simplify
 * Version: 2.0
 * Author: OSW3
 * Author URI: http://osw3.net
 * Description: Clean up the Control Panel.
 * 
 * 1) Place "wp-simplify.php" at the root of your wordpress project
 * 2) Add "require_once(ABSPATH . 'wp-simplify.php');" just after "require_once(ABSPATH . 'wp-settings.php');"
 * 3) Go to : http://your-website.com/wp-admin/options-general.php?page=simplify
 */


// ---------------------------------
// Default Settings
// ---------------------------------

/**
 * Define Simplify version
 */
define('SIMPLIFY_VERSION', '2.0');

/**
 * Define Simplify version
 */
$SIMPLIFY_DEFAULTS = [
	"display_wp_version" => "no",
	"display_wp_credit" => "no",
	"simplify_wp_credit_text" => "",
	"simplify_wp_favicon_url" => "/assets/images/favicon.ico",
	"disable_wp_update" => "yes",
	"display_wp_help_tab" => "no",
	"display_wp_options_tab" => "no",

	"display_wp_admin_bar" => "no",
	"display_wp_admin_bar_logo" => "no",
	"display_wp_admin_bar_menu_toggle" => "no",
	"display_wp_admin_bar_user_tab" => "yes",
	"display_wp_admin_bar_view" => "no",
	"display_wp_admin_bar_comments" => "no",
	"display_wp_admin_bar_site_name" => "yes",
	"display_wp_admin_bar_site_name_icon" => "no",
	"display_wp_admin_bar_new_content" => "no",
	"display_wp_admin_bar_view_site" => "no",
	"change_wp_admin_bar_welcome" => "no",
	"change_wp_admin_bar_welcome_text" => "",

	"display_wp_admin_menu_index" => "yes",
	"display_wp_admin_menu_edit" => "no",
	"display_wp_admin_menu_medias" => "yes",
	"display_wp_admin_menu_pages" => "no",
	"display_wp_admin_menu_comments" => "no",
	"display_wp_admin_menu_themes" => "yes",
	"display_wp_admin_submenu_theme_customize" => "no",
	"display_wp_admin_submenu_theme_editor" => "no",
	"display_wp_admin_submenu_theme_menu" => "no",
	"display_wp_admin_menu_plugins" => "no",
	"display_wp_admin_menu_users" => "no",
	"display_wp_admin_menu_tools" => "no",
	"display_wp_admin_menu_settings" => "no",
	"display_wp_admin_submenu_setting_writing" => "no",
	"display_wp_admin_submenu_setting_reading" => "no",
	"display_wp_admin_submenu_setting_discussion" => "no",
	"display_wp_admin_submenu_setting_media" => "no",
	"display_wp_admin_submenu_setting_permalink" => "no",
	"display_wp_admin_collapse_menu" => "no",

	"disable_wp_all_widgets" => "yes",
	"disable_wp_welcome_panel" => "yes",
	"disable_wp_widget_quick_press" => "yes",
	"disable_wp_widget_activity" => "yes",
	"disable_wp_widget_incoming_links" => "yes",
	"disable_wp_widget_right_now" => "yes",
	"disable_wp_widget_plugins" => "yes",
	"disable_wp_widget_recent_draft" => "yes",
	"disable_wp_widget_recent_comments" => "yes",
	"disable_wp_widget_dashboard_primary" => "yes",
	"disable_wp_widget_dashboard_secondary" => "yes",
];


/**
 * Define Simplify Texts
 */
$SIMPLIFY_TEXTS = [
	"SECTION_01_TITLE" => "Global Settings",
	"SECTION_01_DESCRIPTION" => "Define settings for wordpress interface",
	
	"SECTION_02_TITLE" => "Admin Bar Settings",
	"SECTION_02_DESCRIPTION" => "Define settings for the Admin Bar",
	
	"SECTION_03_TITLE" => "Admin Menu Settings",
	"SECTION_03_DESCRIPTION" => "Define settings for the Admin sidebar menu",
	
	"SECTION_04_TITLE" => "Admin Dashboard Widgets Settings",
	"SECTION_04_DESCRIPTION" => "Define settings for dashboard widgets",
	
	"SECTION_05_TITLE" => "Plugins",
	"SECTION_05_DESCRIPTION" => "Manage plugins",

	"SECTION_06_TITLE" => "Enable Simplify",
	"SECTION_06_DESCRIPTION" => "Enable Simplify",

	"simplify_state_label" => "Activate Simplify",
	"simplify_reset_settings_label" => "Reset settings",
	"simplify_display_wp_version_label" => "Display the WordPress version number",
	"simplify_display_wp_credit_label" => "Display the WordPress credit",
	"simplify_display_wp_credit_text_label" => "Override the WordPress credit text",
	"simplify_wp_favicon_url_label" => "Favicon",
	"simplify_disable_wp_update_label" => "Disable all update",
	"simplify_display_wp_help_tab_label" => "Display the tab : Help",
	"simplify_display_wp_options_tab_label" => "Display the tab : Options",

	"simplify_display_wp_admin_bar_label" => "admin_bar_label",
	"simplify_display_wp_admin_bar_logo_label" => "logo_label",
	"simplify_display_wp_admin_bar_menu_toggle_label" => "menu_toggle_label",
	"simplify_display_wp_admin_bar_user_tab_label" => "Display \"User tab\"",
	"simplify_display_wp_admin_bar_view_label" => "view_label",
	"simplify_display_wp_admin_bar_comments_label" => "Display the new comment tab",
	"simplify_display_wp_admin_bar_site_name_label" => "Display the Site name tab",
	"simplify_display_wp_admin_bar_site_name_icon_label" => "Display th icon of Site name tab",
	"simplify_display_wp_admin_bar_new_content_label" => "Dispaly Add new post tab",
	"simplify_display_wp_admin_bar_view_site_label" => "Display \"View site\" sub-tab of Site name",
	"simplify_change_wp_admin_bar_welcome_label" => "Display the \"Welcome\" message",

	"simplify_display_wp_admin_menu_index_label" => "Display \"Dashboard\" Tab",
	"simplify_display_wp_admin_menu_edit_label" => "Display \"Posts\" Tab",
	"simplify_display_wp_admin_menu_medias_label" => "Display \"Medias\" Tab",
	"simplify_display_wp_admin_menu_pages_label" => "Display \"Pages\" Tab",
	"simplify_display_wp_admin_menu_comments_label" => "Display \"Comments\" Tab",
	"simplify_display_wp_admin_menu_themes_label" => "Display \"Appearence\" Tab",
	"simplify_display_wp_admin_submenu_theme_customize_label" => "Display \"Customize\" subnav of \"Appearence\" Tab",
	"simplify_display_wp_admin_submenu_theme_editor_label" => "Display \"Editor\" subnav of \"Appearence\" Tab",
	"simplify_display_wp_admin_submenu_theme_menu_label" => "Menu register",
	"simplify_display_wp_admin_menu_plugins_label" => "Display \"Plugins\" Tab",
	"simplify_display_wp_admin_menu_users_label" => "Display \"Users\" Tab",
	"simplify_display_wp_admin_menu_tools_label" => "Display \"Tools\" Tab",
	"simplify_display_wp_admin_menu_settings_label" => "Display \"Settings\" Tab",
	"simplify_display_wp_admin_submenu_setting_writing_label" => "Display \"Writing\" subnav of \"Settings\" Tab",
	"simplify_display_wp_admin_submenu_setting_reading_label" => "Display \"Reding\" subnav of \"Settings\" Tab",
	"simplify_display_wp_admin_submenu_setting_discussion_label" => "Display \"Discussion\" subnav of \"Settings\" Tab",
	"simplify_display_wp_admin_submenu_setting_media_label" => "Display \"Media\" subnav of \"Settings\" Tab",
	"simplify_display_wp_admin_submenu_setting_permalink_label" => "Display \"Permalink\" subnav of \"Settings\" Tab",
	"simplify_display_wp_admin_collapse_menu_label" => "Display \"Collapse Menu\" Tab",

	"simplify_disable_wp_all_widgets_label" => "Disabled all widgets",
	"simplify_disable_wp_welcome_panel_label" => "Disabled \"Welcome panel\"",
	"simplify_disable_wp_widget_quick_press_label" => "Disabled \"Quick Draft\"",
	"simplify_disable_wp_widget_activity_label" => "Disabled \"Activity\" panel",
	"simplify_disable_wp_widget_incoming_links_label" => "Disabled \"Incoming Links\"",
	"simplify_disable_wp_widget_right_now_label" => "Disabled \"Right Now\"",
	"simplify_disable_wp_widget_plugins_label" => "Disabled \"Plugins\"",
	"simplify_disable_wp_widget_recent_draft_label" => "Disabled \"Recent Draft\"",
	"simplify_disable_wp_widget_recent_comments_label" => "Disabled \"Recent Comments\"",
	"simplify_disable_wp_widget_dashboard_primary_label" => "Disabled \"Dashboard Primary\"",
	"simplify_disable_wp_widget_dashboard_secondary_label" => "Disabled \"Dashboard Secondary\"",

	"simplify_manage_plugins_label" => "Manage plugins",
];




// ---------------------------------
// Init & Treatments
// ---------------------------------

// Save Simplify Settings

if ('POST' === $_SERVER['REQUEST_METHOD'] && 'simplify' === $_GET['page'])
{
	// Reset Options
	if (isset($_POST['simplify_settings']['reset_settings']))
	{
		delete_option('simplify_settings');
	}

	// Update Options
	else 
	{
		update_option('simplify_settings', $_POST['simplify_settings']);
	}
}


/**
 * Initialisation
 */
function simplify__init()
{
	global $SIMPLIFY_DEFAULTS;

	// Add Simplify to the Admin Menu
	// -- 

	add_action('admin_menu', 'simplify__admin_menu');


	// Add Simplify options to database
	// --
	
	if (false === simplify__get_options())
	{
		add_option('simplify_settings', $SIMPLIFY_DEFAULTS);
	}
	
	
	// Apply simplify
	// --

	if ('yes' != simplify__get_options('display_wp_version')) {
		add_action('admin_init', 'simplify__remove_wp_version');
	}
	if ('no' == simplify__get_options('display_wp_credit')) {
		add_filter('admin_footer_text', 'simplify__remove_wp_credit');
	}
	else if ('override' == simplify__get_options('display_wp_credit')) {
		add_filter('admin_footer_text', 'simplify__override_wp_credits');
	}
	if (!empty(simplify__get_options('simplify_wp_favicon_url'))) {
		add_action('admin_head', 'simplify__add_favicon');
	} 
	if ('yes' == simplify__get_options('disable_wp_update')) {
        add_action('after_setup_theme', 'simplify__remove_core_update');
        remove_action('load-update-core.php', 'wp_update_plugins');
        add_filter('pre_site_transient_update_plugins', '__return_null');
        add_filter('pre_site_transient_update_core', 'simplify__remove_core_update');
        add_filter('pre_site_transient_update_plugins', 'simplify__remove_core_update');
        add_filter('pre_site_transient_update_themes', 'simplify__remove_core_update');
        add_action('admin_menu', 'simplify__wphidenag');
        add_action('admin_menu', 'simplify__remove_submenu_index_update');
	} 
	if ('yes' != simplify__get_options('display_wp_help_tab')) {
		add_filter('contextual_help', 'simplify__remove_help_tab', 999, 3);
	} 
	if ('yes' != simplify__get_options('display_wp_options_tab')) {
		add_filter('screen_options_show_screen', '__return_false');
	} 

	if ('yes' != simplify__get_options('display_wp_admin_bar')) {
		show_admin_bar(false);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_logo')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_bar_logo', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_menu_toggle')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_menu_toggle', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_user_tab')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_user_tab', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_view')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_view', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_comments')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_comments', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_site_name')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_site_name', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_site_name_icon')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_site_name_icon', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_new_content')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_new_content', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_bar_view_site')) {
		add_action('admin_bar_menu', 'simplify__wp_remove_admin_view_site', 999);
	} 
	if ('yes' != simplify__get_options('change_wp_admin_bar_welcome')) {
		add_filter('gettext', 'simplify__wp_change_admin_bar_welcome_text', 10, 3);
	} 

	if ('yes' != simplify__get_options('display_wp_admin_menu_index')) {
		add_action('admin_menu', 'simplify__remove_menu_index');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_edit')) {
		add_action('admin_menu', 'simplify__remove_menu_edit');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_medias')) {
		add_action('admin_menu', 'simplify__remove_menu_medias');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_pages')) {
		add_action('admin_menu', 'simplify__remove_menu_page');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_comments')) {
		add_action('admin_menu', 'simplify__remove_menu_comments');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_themes')) {
		add_action('admin_menu', 'simplify__remove_menu_themes');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_submenu_theme_customize')) {
		add_action('admin_menu', 'simplify__remove_submenu_theme_customize', 999);
	} 
	if ('yes' != simplify__get_options('display_wp_admin_submenu_theme_editor')) {
		add_action('admin_menu', 'simplify__remove_submenu_theme_edit', 999);
	} 
	if ('yes' == simplify__get_options('display_wp_admin_submenu_theme_menu')) {
		register_nav_menu('simplify-menu', 'Simplify Menu');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_plugins')) {
		add_action('admin_menu', 'simplify__remove_menu_plugins');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_users')) {
		add_action('admin_menu', 'simplify__remove_menu_users');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_tools')) {
		add_action('admin_menu', 'simplify__remove_menu_tools');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_menu_settings')) {
		add_action('admin_menu', 'simplify__remove_menu_settings');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_submenu_setting_writing')) {
		add_action('admin_menu', 'simplify__remove_submenu_setting_writing');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_submenu_setting_reading')) {
		add_action('admin_menu', 'simplify__remove_submenu_setting_reading');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_submenu_setting_discussion')) {
		add_action('admin_menu', 'simplify__remove_submenu_setting_discussion');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_submenu_setting_media')) {
		add_action('admin_menu', 'simplify__remove_submenu_setting_media');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_submenu_setting_permalink')) {
		add_action('admin_menu', 'simplify__remove_submenu_setting_permalink');
	} 
	if ('yes' != simplify__get_options('display_wp_admin_collapse_menu')) {
		add_action('admin_head', 'simplify__remove_collapse_menu');
	} 

	if ('yes' != simplify__get_options('disable_wp_all_widgets')) {
		// add_filter('admin_footer_text', 'simplify__remove_wp_credits');
	} 
	if ('yes' == simplify__get_options('disable_wp_welcome_panel')) {
		remove_action('welcome_panel', 'wp_welcome_panel');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_quick_press')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_quick_press');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_activity')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_activity');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_incoming_links')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_incoming_links');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_right_now')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_right_now');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_plugins')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_plugins');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_recent_draft')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_recent_drafts');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_recent_comments')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_recent_comments');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_dashboard_primary')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_dashboard_primary');
	} 
	if ('yes' == simplify__get_options('disable_wp_widget_dashboard_secondary')) {
		add_action('wp_dashboard_setup', 'simplify__wp_remove_widget_dashboard_secondary');
	} 
}
simplify__init();


// ---------------------------------
// ---------------------------------

function simplify__admin_menu()
{
	// Add Simplify in Admin Menu
	// add_menu_page('Simplify', 'Simplify', 'manage_options', 'simplify', 'simplify__settings_page' );

	// Add Simplify in Settings tab
	add_options_page('Simplify', 'Simplify', 'manage_options', 'simplify', 'simplify__settings_page' );
}
function simplify__settings_page()
{
	global $SIMPLIFY_TEXTS;

	echo '<style>h2 {margin-top: 2rem;}</style>';
	echo '<div class="wrap">';
	echo '<h1>Simplify '.SIMPLIFY_VERSION.' <small>by <a href="http://www.osw3.net" target="_blank">osw3</a></small></h1>';
	echo '<form method="post">';
	
	// Section 01 - Global Settings
	
	add_settings_section( 
		'simplify_section_01', 
		strtoupper($SIMPLIFY_TEXTS['SECTION_01_TITLE']), 
		function(){global $SIMPLIFY_TEXTS; echo $SIMPLIFY_TEXTS['SECTION_01_DESCRIPTION']; },
		'simplify_setting_page'
	);
	simplify__display_wp_version();
	simplify__display_wp_credit();
	simplify__simplify_wp_favicon_url();
	simplify__disable_wp_update();
	simplify__display_wp_help_tab();
	simplify__display_wp_options_tab();
	
	// Section 02 - Admin Bar Settings
	add_settings_section( 
		'simplify_section_02', 
		strtoupper($SIMPLIFY_TEXTS['SECTION_02_TITLE']), 
		function(){global $$SIMPLIFY_TEXTS; echo $$SIMPLIFY_TEXTS['SECTION_02_DESCRIPTION']; },
		'simplify_setting_page'
	);
	simplify__display_wp_admin_bar();
	simplify__display_wp_admin_bar_logo();
	simplify__display_wp_admin_bar_menu_toggle();
	simplify__display_wp_admin_bar_user_tab();
	simplify__display_wp_admin_bar_view();
	simplify__display_wp_admin_bar_comments();
	simplify__display_wp_admin_bar_site_name();
	simplify__display_wp_admin_bar_site_name_icon();
	simplify__display_wp_admin_bar_new_content();
	simplify__display_wp_admin_bar_view_site();
	simplify__change_wp_admin_bar_welcome();
	
	// Section 03 - Admin Bar Settings
	add_settings_section( 
		'simplify_section_03', 
		strtoupper($SIMPLIFY_TEXTS['SECTION_03_TITLE']), 
		function(){global $$SIMPLIFY_TEXTS; echo $$SIMPLIFY_TEXTS['SECTION_03_DESCRIPTION']; },
		'simplify_setting_page'
	);
	simplify__display_wp_admin_menu_index();
	simplify__display_wp_admin_menu_edit();
	simplify__display_wp_admin_menu_medias();
	simplify__display_wp_admin_menu_pages();
	simplify__display_wp_admin_menu_comments();
	simplify__display_wp_admin_menu_themes();
	simplify__display_wp_admin_submenu_theme_customize();
	simplify__display_wp_admin_submenu_theme_editor();
	simplify__display_wp_admin_submenu_theme_menu();
	simplify__display_wp_admin_menu_plugins();
	simplify__display_wp_admin_menu_users();
	simplify__display_wp_admin_menu_tools();
	simplify__display_wp_admin_menu_settings();
	simplify__display_wp_admin_submenu_setting_writing();
	simplify__display_wp_admin_submenu_setting_reading();
	simplify__display_wp_admin_submenu_setting_discussion();
	simplify__display_wp_admin_submenu_setting_media();
	simplify__display_wp_admin_submenu_setting_permalink();
	simplify__display_wp_admin_collapse_menu();
	
	// Section 04 - Admin Bar Settings
	add_settings_section( 
		'simplify_section_04', 
		strtoupper($SIMPLIFY_TEXTS['SECTION_04_TITLE']), 
		function(){global $$SIMPLIFY_TEXTS; echo $$SIMPLIFY_TEXTS['SECTION_04_DESCRIPTION']; },
		'simplify_setting_page'
	);
	// simplify__disable_wp_all_widgets();
	simplify__disable_wp_welcome_panel();
	simplify__disable_wp_widget_quick_press();
	simplify__disable_wp_widget_activity();
	simplify__disable_wp_widget_incoming_links();
	simplify__disable_wp_widget_right_now();
	simplify__disable_wp_widget_plugins();
	simplify__disable_wp_widget_recent_draft();
	simplify__disable_wp_widget_recent_comments();
	simplify__disable_wp_widget_dashboard_primary();
	simplify__disable_wp_widget_dashboard_secondary();
	
	// Section 05 - Admin Bar Settings
	// add_settings_section( 
	// 	'simplify_section_05', 
	// 	strtoupper($SIMPLIFY_TEXTS['SECTION_05_TITLE']), 
	// 	function(){global $SIMPLIFY_TEXTS; echo $SIMPLIFY_TEXTS['SECTION_05_DESCRIPTION']; },
	// 	'simplify_setting_page'
	// );
	// simplify__manage_plugins();

	// Section 05 - Admin Bar Settings
	add_settings_section( 
		'simplify_section_06', 
		strtoupper($SIMPLIFY_TEXTS['SECTION_06_TITLE']), 
		function(){global $SIMPLIFY_TEXTS; echo $SIMPLIFY_TEXTS['SECTION_05_DESCRIPTION']; },
		'simplify_setting_page'
	);
	simplify__reset_settings();

    settings_fields( 'simplify_setting_page' );
    do_settings_sections( 'simplify_setting_page' );
	submit_button();

	echo '</form>';
	echo '</div>';
}


// ---------------------------------
// Form Fields
// ---------------------------------

function simplify__display_wp_version() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_version', 
		$SIMPLIFY_TEXTS['simplify_display_wp_version_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_version",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_01'
	);
}
function simplify__display_wp_credit() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_credit', 
		$SIMPLIFY_TEXTS['simplify_display_wp_credit_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_credit",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				],[
					"label" => "Override",
					"value" => "override"
				]]
			]); 

			echo simplify__set_text([ 
				"name" =>  "simplify_wp_credit_text"
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_01'
	);
}
function simplify__simplify_wp_favicon_url() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_wp_favicon_url', 
		$SIMPLIFY_TEXTS['simplify_wp_favicon_url_label'], 
		function(){ 
			echo simplify__set_text([ 
				"name" =>  "simplify_wp_favicon_url"
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_01'
	);
}
function simplify__disable_wp_update() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_update', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_update_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "disable_wp_update",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_01'
	);
}
function simplify__display_wp_help_tab() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_help_tab', 
		$SIMPLIFY_TEXTS['simplify_display_wp_help_tab_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_help_tab",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_01'
	);
}
function simplify__display_wp_options_tab() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_options_tab', 
		$SIMPLIFY_TEXTS['simplify_display_wp_options_tab_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_options_tab",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_01'
	);
}

function simplify__display_wp_admin_bar() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_logo() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_logo', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_logo_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_logo",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_menu_toggle() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_menu_toggle', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_menu_toggle_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_menu_toggle",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_user_tab() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_user_tab', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_user_tab_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_user_tab",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_view() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_view', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_view_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_view",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_comments() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_comments', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_comments_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_comments",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_site_name() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_site_name', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_site_name_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_site_name",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_site_name_icon() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_site_name_icon', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_site_name_icon_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_site_name_icon",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_new_content() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_new_content', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_new_content_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_new_content",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__display_wp_admin_bar_view_site() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_bar_view_site', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_bar_view_site_label'], 
		function(){ 
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_bar_view_site",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}
function simplify__change_wp_admin_bar_welcome() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_change_wp_admin_bar_welcome', 
		$SIMPLIFY_TEXTS['simplify_change_wp_admin_bar_welcome_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "change_wp_admin_bar_welcome",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				],[
					"label" => "Override",
					"value" => "override"
				]]
			]); 
			
			echo simplify__set_text([ 
				"name" =>  "change_wp_admin_bar_welcome_text"
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_02'
	);
}

function simplify__display_wp_admin_menu_index() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_index', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_index_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_index",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_edit() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_edit', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_edit_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_edit",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]); 
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_medias() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_medias', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_medias_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_medias",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_pages() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_pages', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_pages_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_pages",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_comments() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_comments', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_comments_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_comments",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_themes() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_themes', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_themes_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_themes",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_theme_customize() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_theme_customize', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_theme_customize_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_theme_customize",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_theme_editor() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_theme_editor', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_theme_editor_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_theme_editor",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_theme_menu() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_theme_menu', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_theme_menu_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_theme_menu",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_plugins() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_plugins', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_plugins_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_plugins",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_users() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_users', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_users_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_users",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_tools() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_tools', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_tools_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_tools",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_menu_settings() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_menu_settings', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_menu_settings_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_menu_settings",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_setting_writing() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_setting_writing', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_setting_writing_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_setting_writing",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_setting_reading() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_setting_reading', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_setting_reading_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_setting_reading",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_setting_discussion() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_setting_discussion', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_setting_discussion_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_setting_discussion",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_setting_media() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_setting_media', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_setting_media_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_setting_media",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_submenu_setting_permalink() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_submenu_setting_permalink', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_submenu_setting_permalink_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_submenu_setting_permalink",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}
function simplify__display_wp_admin_collapse_menu() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_display_wp_admin_collapse_menu', 
		$SIMPLIFY_TEXTS['simplify_display_wp_admin_collapse_menu_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "display_wp_admin_collapse_menu",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_03'
	);
}

function simplify__disable_wp_all_widgets() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_all_widgets', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_all_widgets_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_all_widgets",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_welcome_panel() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_welcome_panel', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_welcome_panel_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_welcome_panel",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_quick_press() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_quick_press', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_quick_press_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_quick_press",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_activity() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_activity', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_activity_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_activity",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_incoming_links() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_incoming_links', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_incoming_links_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_incoming_links",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_right_now() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_right_now', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_right_now_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_right_now",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_plugins() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_plugins', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_plugins_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_plugins",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_recent_draft() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_recent_draft', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_recent_draft_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_recent_draft",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_recent_comments() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_recent_comments', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_recent_comments_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_recent_comments",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_dashboard_primary() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_dashboard_primary', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_dashboard_primary_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_dashboard_primary",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}
function simplify__disable_wp_widget_dashboard_secondary() 
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_disable_wp_widget_dashboard_secondary', 
		$SIMPLIFY_TEXTS['simplify_disable_wp_widget_dashboard_secondary_label'], 
		function(){
			echo simplify__set_select([ 
				"name" =>  "disable_wp_widget_dashboard_secondary",
				"options" => [[
					"label" => "Yes",
					"value" => "yes"
				],[
					"label" => "No",
					"value" => "no"
				]]
			]);
		},
		'simplify_setting_page', 
		'simplify_section_04'
	);
}

function simplify__manage_plugins()
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_manage_plugins', 
		$SIMPLIFY_TEXTS['simplify_manage_plugins_label'], 
		function() {
			$plugins = get_plugins();

			echo "<table>";
			foreach ($plugins as $plugin) 
			{
				$plugin_name = $plugin['Name'];
				$plugin_id = strtolower($plugin_name);
				echo "<tr>";
				echo "<th>".$plugin_name."</th>";
				echo "<td>".$plugin_id."</td>";
				echo "<td>". simplify__set_checkbox([ "name" => "plugin_". $plugin_id]) ."</td>";
				echo "</tr>";
			}
			echo "</table>";

			// global $new_whitelist_options;
			var_dump( get_option('wporg_setting_name') );

		},
		'simplify_setting_page', 
		'simplify_section_05'
	);
}

function simplify__reset_settings()
{
	global $SIMPLIFY_TEXTS;
	add_settings_field( 
		'simplify__settings_page__simplify_reset_settings', 
		$SIMPLIFY_TEXTS['simplify_reset_settings_label'], 
		function() { echo simplify__set_checkbox([ "name" => "reset_settings" ]); },
		'simplify_setting_page', 
		'simplify_section_06'
	);
}


// ---------------------------------
// Hooks Callback
// ---------------------------------

function simplify__remove_wp_version() {
	remove_filter('update_footer','core_update_footer');
}
function simplify__remove_wp_credit() {
    return null;
}
function simplify__override_wp_credits() {
	global $simplify_wp_credit_text;
	$simplify_wp_credit_text = simplify__get_options('simplify_wp_credit_text');
    return $simplify_wp_credit_text;
}
function simplify__add_favicon() {
	global $simplify_wp_favicon_url;
    if (!empty(simplify__get_options('simplify_wp_favicon_url'))) {
		$favicon = get_template_directory().simplify__get_options('simplify_wp_favicon_url');
		echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.$favicon.'">';
    }
}
function simplify__remove_core_update() {
	global $wp_version;
	return (object) array(
		'last_checked' => time(),
		'version_checked' => $wp_version
	);
}
function simplify__wphidenag() {
	remove_action('admin_notices', 'update_nag', 3);
}
function simplify__remove_submenu_index_update() {
	remove_submenu_page('index.php', 'update-core.php');
}
function simplify__remove_help_tab($old_help, $screen_id, $screen) {
    $screen->remove_help_tabs();
    return $old_help;
}

function simplify__wp_remove_admin_bar_logo($wp_admin_bar) {
	$wp_admin_bar->remove_node('wp-logo');
}
function simplify__wp_remove_admin_menu_toggle($wp_admin_bar) {
	$wp_admin_bar->remove_node('menu-toggle');
}
function simplify__wp_remove_admin_user_tab($wp_admin_bar) {
	$wp_admin_bar->remove_node('my-account');
}
function simplify__wp_remove_admin_view($wp_admin_bar) {
	$wp_admin_bar->remove_node('view');
}
function simplify__wp_remove_admin_comments($wp_admin_bar) {
	$wp_admin_bar->remove_node('comments');
}
function simplify__wp_remove_admin_site_name($wp_admin_bar) {
	$wp_admin_bar->remove_node('site-name');
}
function simplify__wp_remove_admin_site_name_icon() {
	echo '<style type="text/css">#wp-admin-bar-site-name > a::before { display: none; visibility: hidden; }</style>';
}
function simplify__wp_remove_admin_new_content($wp_admin_bar) {
	$wp_admin_bar->remove_node('new-content');
}
function simplify__wp_remove_admin_view_site($wp_admin_bar) {
	$wp_admin_bar->remove_node('view-site');
	$wp_admin_bar->remove_node('admin-bar');
}
function simplify__wp_change_admin_bar_welcome_text($translated, $text, $domain) {
	
	$welcome_text = null;

	if ( 'override' == simplify__get_options('change_wp_admin_bar_welcome') ) {
		$welcome_text = simplify__get_options('change_wp_admin_bar_welcome_text').", ";
	}
    
    if (!is_admin() || 'default' != $domain)
        return $translated;
    
    if (false !== strpos($translated, 'Howdy, '))
        return str_replace('Howdy, ', $welcome_text, $translated);

    if (false !== strpos($translated, 'Salutations'))
        return str_replace('Salutations, ', $welcome_text, $translated);

    if (false !== strpos($translated, 'Welcome, '))
        return str_replace('Welcome, ', $welcome_text, $translated);

    return $translated;
}

function simplify__remove_menu_index() {
	remove_menu_page('index.php');
}
function simplify__remove_menu_edit() {
	remove_menu_page('edit.php');
}
function simplify__remove_menu_medias() {
	remove_menu_page('upload.php');
}
function simplify__remove_menu_page() {
	remove_menu_page('edit.php?post_type=page');
}
function simplify__remove_menu_comments() {
	remove_menu_page('edit-comments.php');
}
function simplify__remove_menu_themes() {
	remove_menu_page('themes.php');
}
function simplify__remove_submenu_theme_customize() {
    global $submenu;
    
    if ( isset( $submenu[ 'themes.php' ] ) ) {
        foreach ( $submenu[ 'themes.php' ] as $index => $menu_item ) {
            if ( in_array( 'Customize', $menu_item ) ) {
				// var_dump( $index );
                unset( $submenu[ 'themes.php' ][ $index ] );
            }
        }
    }
}
function simplify__remove_submenu_theme_edit() {
	remove_submenu_page('themes.php', 'theme-editor.php');
}
function simplify__remove_menu_plugins() {
	remove_menu_page('plugins.php');
}
function simplify__remove_menu_users() {
	remove_menu_page('users.php');
}
function simplify__remove_menu_tools() {
	remove_menu_page('tools.php');
}
function simplify__remove_menu_settings() {
	remove_menu_page('options-general.php');
}
function simplify__remove_submenu_setting_writing() {
	remove_submenu_page('options-general.php', 'options-writing.php');
}
function simplify__remove_submenu_setting_reading() {
	remove_submenu_page('options-general.php', 'options-reading.php');
}
function simplify__remove_submenu_setting_discussion() {
	remove_submenu_page('options-general.php', 'options-discussion.php');
}
function simplify__remove_submenu_setting_media() {
	remove_submenu_page('options-general.php', 'options-media.php');
}
function simplify__remove_submenu_setting_permalink() {
	remove_submenu_page('options-general.php', 'options-permalink.php');
}
function simplify__remove_collapse_menu() {
    echo '<style type="text/css">#collapse-menu { display: none; visibility: hidden; }</style>';
}

function simplify__wp_remove_widget_quick_press() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
}
function simplify__wp_remove_widget_activity() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
}
function simplify__wp_remove_widget_incoming_links() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
}
function simplify__wp_remove_widget_right_now() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
function simplify__wp_remove_widget_plugins() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
}
function simplify__wp_remove_widget_recent_drafts() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
}
function simplify__wp_remove_widget_recent_comments() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
}
function simplify__wp_remove_widget_dashboard_primary() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
function simplify__wp_remove_widget_dashboard_secondary() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}


// ---------------------------------
// Utils
// ---------------------------------

function simplify__get_options( $option_name = null )
{
	global $SIMPLIFY_DEFAULTS;

	// Get options in database
	$options = get_option('simplify_settings');

	if (false === $options)
	{
		$options = $SIMPLIFY_DEFAULTS;
	}
	else if (is_array($options))
	{
		$options = array_merge($SIMPLIFY_DEFAULTS, $options);
	}
	

	if (isset($options[$option_name]))
		return $options[$option_name];
	else
		return $options;
}
function simplify__set_text($options)
{
	return "<input type='text' class='regular-text code' name='".'simplify_settings'."[".$options['name']."]' value='".simplify__get_options($options['name'])."'/>";
}
function simplify__set_checkbox($options)
{
	return "<input type='checkbox' name='".'simplify_settings'."[".$options['name']."]'/>";
}
function simplify__set_select($options)
{
	$html_options = null;
	foreach ($options['options'] as $option)
	{
		$html_options .= "<option value='".$option['value']."' ".( simplify__get_options($options['name']) == $option['value'] ? "selected" : null ).">".$option['label']."</option>";
	}
	return "<select name='".'simplify_settings'."[".$options['name']."]'>".$html_options."</select>";
}

