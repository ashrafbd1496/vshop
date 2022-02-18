<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if ( ! class_exists( 'Redux' ) ) {
	return null;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'vshop_demo';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// REQUIRED!!  Change these values as you need/desire.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	'menu_title'                => esc_html__( 'Redux Options', 'vshop' ),
	'page_title'                => esc_html__( 'Redux Options', 'vshop' ),

	// Disable this in case you want to create your own google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Choose an icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Choose an priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Set a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc.
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => null,

	// For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel.
	'page_slug'                 => '_options',

	// On load save the defaults to DB before user clicks save or not.
	'save_defaults'             => true,

	// If true, shows the default value next to each field that is not the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default. Suggested: *.
	'default_mark'              => '',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// CAREFUL -> These options are for advanced use only.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
	'output_tag'                => true,

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',

	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	'use_cdn'                   => true,
	'compiler'                  => true,

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	//Disable footer credit
	'footer_credit'             => ' ',

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => esc_html__( 'Documentation', 'vshop' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => esc_html__( 'Support', 'vshop' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-extensions',
	'href'  => 'redux.io/extensions',
	'title' => esc_html__( 'Extensions', 'vshop' ),
);


// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '<p>' . sprintf( __( '', 'vshop' ) . '</p>', '<strong>' . $v . '</strong>' );
} else {
	$args['intro_text'] = '<p>' . esc_html__( '', 'vshop' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( '', 'vshop' ) . '</p>';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> BEGIN HELP TABS
 */

$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'vshop' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'vshop' ) . '</p>',
	),

	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'vshop' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'vshop' ) . '</p>',
	),
);

Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'vshop' ) . '</p>';
Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */



/** Start sections */

$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
);

//Homepage options
Redux::set_section(
	$opt_name,
	array(
	'title'  => esc_html__( 'Homepage Options', 'vshop' ),
	'id'     => 'vshop_homepage',
	'desc'   => esc_html__( 'Homepage Options are here.', 'vshop' ),
	'icon'   => 'el el-home',
));

//Header Options
Redux::set_section( $opt_name,
	array(
	'title'  => esc_html__( 'Header Options', 'vshop' ),
	'id'     => 'vshop_header_options',
	'subsection'=> true,
	'fields'	=>array(
		array(
			'id'       => 'welcome_text',
			'type'     => 'text',
			'title'    => esc_html__( 'Welcome Text', 'vshop' ),
			'default'  => 'Welcome to Our store Vegetable',
		),
		array(
			'id'       => 'vshop_phone',
			'type'     => 'text',
			'title'    => esc_html__( 'Phone Number', 'vshop' ),
			'default'  => '123 - 456 - 7890',
		),

	),
	
));

//Home Slider Options
Redux::set_section( $opt_name,
	array(
	'title'  => esc_html__( 'Home Slider', 'vshop' ),
	'id'     => 'home_slider',
	'subsection'=> true,
	'fields'	=>array(
		array(
	 	'id'          => 'v_slide',
	    'type'        => 'slides',
	    'title'       => esc_html__('Slides Options', 'vshop'),
	    'placeholder' => array(
	        'title'       => esc_html__('Fresh Vegetable Default Title', 'vshop'),
	        'description' => esc_html__('Fresh Vegetable Default Description', 'vshop'),
	        'button' => esc_html__('Button text', 'vshop'),
	        'url'         => esc_html__('https://localhost/vshop/shop', 'vshop'),
	    ),
	),
		 array(
	    	'id'	=>'button_text',
	    	'type'	=>'text',
	    	'title'       => esc_html__('Button Text', 'vshop'),
	    	'default'	=> 'Shop Now',

	    ),
	
)));

//Parallax Banner  Section Options
Redux::set_section( $opt_name,
	array(
	'title'  => esc_html__( 'Parallax Banner', 'vshop' ),
	'id'     => 'parallax_banner',
	'subsection'=> true,
	'fields'	=>array(
		array(
	 	'id'          => 'p_banner_bg',
	    'type'        => 'background',
	    'title'       => esc_html__('Parallax Banner background', 'vshop'),
	    
	),
		 array(
	    	'id'	=>'p_heading1',
	    	'type'	=>'text',
	    	'title'       => esc_html__('Parallax Heading one', 'vshop'),
	    	'default'	=> '2022',

	    ),
		  array(
	    	'id'	=>'p_heading2',
	    	'type'	=>'text',
	    	'title'       => esc_html__('Parallax Heading Two', 'vshop'),
	    	'default'	=> 'Food Market',

	    ),
		   array(
	    	'id'	=>'p_heading3',
	    	'type'	=>'text',
	    	'title'       => esc_html__('Parallax Heading Three', 'vshop'),
	    	'default'	=> 'Special Offer',

	    ),
	
)));


















//

// $section = array(
//     'title' => esc_html__('Banner OPtions', 'vshop' ),
//     'icon' => 'el-icon-flag',
//     'fields' => array(
//         array(
//             'id'             => 'repeater-field-id',
//             'type'           => 'repeater',
//             'title'          => esc_html__( 'Banners', 'vshop' ),
        
//             //'group_values' => true, // Group all fields below within the repeater ID
//             //'item_name'    => '', // Add a repeater block name to the Add and Delete buttons
//             //'bind_title'   => '', // Bind the repeater block title to this field ID
//             //'static'       => 2, // Set the number of repeater blocks to be output
//             //'limit'        => 2, // Limit the number of repeater blocks a user can create
//             //'sortable'     => false, // Allow the users to sort the repeater blocks or not
//             'fields'         => array(
//                 array(
//                     'id'          => 'banner_item_title',
//                     'type'        => 'text',
//                     'placeholder' => esc_html__( 'Banner Item Title', 'vshop' ),
//                 ),
             
//                 array(
//                     'id'      => 'banner_item_desc',
//                     'type'    => 'text',
//                     'placeholder' => esc_html__( 'Banner Item Description', 'vshop' ),
//                 ),
//             )
//         )
//     )
// );

// Redux::set_section( $opt_name, $section );










/*
 * <--- END SECTIONS
 */
