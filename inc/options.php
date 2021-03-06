<?php
/*
*
*
This template creates a submenu under Appearance in the wordpress that allows
the users to change certain elements without having to change the code 
*
*
*/


//This function creates the submenu under the desired existing menus on wordpress.
function ishabnam_add_submenu() {
		add_submenu_page(
			'themes.php',
			'ishabnam Custom Options',
			'Custom Options',
			'manage_options',
			'custom_options',
			'ishabnam_theme_options_page'
		);
	}
add_action( 'admin_menu', 'ishabnam_add_submenu' );


//This function deteremines that it would be a settings page that would help edit exsting content.
function ishabnam_settings_init() { 
	register_setting( 'theme_options', 'ishabnam_options_settings' );
	
				
	add_settings_section(
		'ishabnam_options_page_section', 
		'', 
		'ishabnam_options_page_section_callback', 
		'ishabnam_theme_options'
	);
//This function produces a decription for the submenu page
		function ishabnam_options_page_section_callback() { 
		echo 'A custom edit page to customize some basic information in the theme.';
	}

//This function creates a dropdown menu from where users can choose prexisting options to customize the theme 
		add_settings_field( 
		'select_field', 
		'Choose a header Colour', 
		'select_field_render', 
		'ishabnam_theme_options', 
		'ishabnam_options_page_section'  
	);

		function select_field_render() { 
			$options = get_option( 'ishabnam_options_settings' );
		?>
			<select name="ishabnam_options_settings[select_field]">
				<option value="Pink" <?php if (isset($options['ishabnam_select_field'])) selected( $options['ishabnam_select_field'], 1 ); ?>>Pink</option>
				<option value="Purple" <?php if (isset($options['ishabnam_select_field'])) selected( $options['ishabnam_select_field'], 2 ); ?>>Purple</option>
			</select>
		<?php
	}	
//This function creates a text box for users to input content to edit in the theme
		add_settings_field( 
		'ishabnam_text_field', 
		'Enter your Custom Signature', 
		'ishabnam_text_field_render', 
		'ishabnam_theme_options', 
		'ishabnam_options_page_section' 
	);

	function ishabnam_text_field_render() { 
		$signature = esc_attr( get_option( 'ishabnam_options_settings' ) );
			?>
		<input type="text" name="ishabnam_options_settings[ishabnam_text_field]" value="" placeholder="Custom Signature" />
		<?php
	}

//This function generates the layout of the Custom submenu
		function ishabnam_theme_options_page(){ 
			?>
			<form action="options.php" method="post">
				<h2>Custom Options Page</h2>
					<?php
						settings_fields( 'theme_options' );
						do_settings_sections( 'ishabnam_theme_options' );
						submit_button();
					?>
			</form>
		<?php
		}
	}
	
add_action( 'admin_init', 'ishabnam_settings_init' );