<?php

	/**
	 * @package Region Halland Mce Buttons with Css
	 */
	/*
	Plugin Name: Region Halland Mce Buttons with Css
	Description: Skapa formatering-knappar i Wordpress editor inklusive css
	Version: 1.2.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa metod för att lägga till js-fil
	add_action('admin_enqueue_scripts', 'my_enqueue_for_region_halland_mce_buttons_with_css');

	// Metod för att lägga till js-fil
	function my_enqueue_for_region_halland_mce_buttons_with_css($hook) {
		
		// Kontrollera om det finns en angiven css för wordpress editor
		$myEditorStyle = ENV('WP_EDITOR_STYLE_CSS');
		
		$useMyEditorStyle = 0;
		if (strlen($myEditorStyle) > 0) {
			$useMyEditorStyle = 1;
		}
		
		// TinyMCE editor styling
		if ($useMyEditorStyle == 1) {
			add_editor_style($myEditorStyle);
		}

	}

	// Callback function to insert 'styleselect' into the $buttons array
	function my_region_halland_mce_buttons_with_css($buttons) {
		array_unshift($buttons, 'styleselect');
		return $buttons;
	}
	// Register our callback to the appropriate filter
	add_filter('mce_buttons_3', 'my_region_halland_mce_buttons_with_css');

	// Callback function to filter the MCE settings
	function my_region_halland_mce_buttons_with_css_before_init($init_array) {  
		
		// Skapa format-knappar
		$myButtons = array(
			array(  
				'title' => 'Blå bakgrund',  
				'block' => 'div',  
				'classes' => 'infobox--border',
				'wrapper' => true,
			),
			array(  
				'title' => 'List rubrik (barn)',  
				'block' => 'div',  
				'classes' => 'infobox--list-header-children',
				'wrapper' => true,
			),  
			array(  
				'title' => 'List innehåll (barn)',  
				'block' => 'div',  
				'classes' => 'infobox--list-content-children',
				'wrapper' => true,
			),  
			array(  
				'title' => 'List rubrik (äldre)',  
				'block' => 'div',  
				'classes' => 'infobox--list-header-old',
				'wrapper' => true,
			),  
			array(  
				'title' => 'List innehåll (äldre)',  
				'block' => 'div',  
				'classes' => 'infobox--list-content-old',
				'wrapper' => true,
			),
			array(  
				'title' => 'Tabellrubrik',  
				'block' => 'div',  
				'classes' => 'table--header',
				'wrapper' => true,
			),  
		);  

		// json-encoda knapparna
		$init_array['style_formats'] = json_encode($myButtons);  
		
		// Returnera knapparna
		return $init_array;  
	  
	} 
	
	// Skapa wp-filter "tiny_mce_before_init" 
	add_filter('tiny_mce_before_init', 'my_region_halland_mce_buttons_with_css_before_init' );

	
	// Metod som anropas när pluginen aktiveras
	function region_halland_mce_buttons_with_css_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_mce_buttons_with_css_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_mce_buttons_with_css_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_mce_buttons_with_css_deactivate');

?>