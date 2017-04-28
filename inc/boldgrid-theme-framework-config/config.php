<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-hifidel';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'12' => array( '[menu]secondary' ),
		'1' => array( '[widget]boldgrid-widget-1' ),
		'8' => array( '[menu]social' ),
		'7' => array( '[menu]tertiary' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'11' => array( '[action]boldgrid_primary_navigation' ),
		'13' => array( '[action]boldgrid_container_wrap_start', '[widget]boldgrid-widget-2', '[action]boldgrid_container_wrap_end' ),
	);

	// Assign menus, widgets, and actions to locations in generic footer template.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]footer_center' ),
		'5' => array( '[widget]boldgrid-widget-3' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#f77a1e',
				'#333333',
				'#cccccc',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#f77a1e',
				'#333333',
				'#ffffff',
				'#080808',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#000000',
				'#000000',
				'#cccccc',
				'#e7e7e7',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#808080',
				'#30425a',
				'#ffffff',
				'#233041',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#e8d912',
				'#1a1a1a',
				'#c65900',
				'#f7a814',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		// Photography.
		case 12:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		// General.
		case 32:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Six Caps';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 30;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 137;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.gridblock h4, .mod-alpha h3, .mod-alpha-1 h3'] = array(
		'type' => 'subheadings',
		'round' => 'ceil',
		'amount' => 1.25,
	);

	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-title a'] = array(
		'type' => 'subheadings',
		'round' => 'ceil',
		'amount' => 1.5,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.woocommerce ul.products li.product .woocommerce-loop-product__title'] = array(
		'type' => 'headings',
		'round' => 'ceil',
		'amount' => 1.3,
	);

	// Fonts & Icons.
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Background.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Right Above Primary Menu';
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Secondary Menu Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Top Right Above Header';

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Header';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer Widget';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Six Caps';
	$controls['logo_font_size']['default'] = 70;

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );

/**
 * This is used to open a container up around a widget location.
 */
function boldgrid_container_wrap_start() { ?>
	<div class="container">
<?php }
add_action( 'boldgrid_container_wrap_start', 'boldgrid_container_wrap_start', 5 );

/**
 * This is used to close a container around a widget location.
 */
function boldgrid_container_wrap_end() { ?>
	</div>
<?php }
add_action( 'boldgrid_container_wrap_end', 'boldgrid_container_wrap_end', 20 );
