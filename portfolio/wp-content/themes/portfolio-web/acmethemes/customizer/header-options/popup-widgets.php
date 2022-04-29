<?php
/*Title*/
$wp_customize->add_setting( 'portfolio_web_theme_options[portfolio-web-popup-widget-title]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['portfolio-web-popup-widget-title'],
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'portfolio_web_theme_options[portfolio-web-popup-widget-title]', array(
	'label'		        => esc_html__( 'Popup Main Title', 'portfolio-web' ),
	'section'           => 'portfolio-web-menu-options',
	'settings'          => 'portfolio_web_theme_options[portfolio-web-popup-widget-title]',
	'type'	  	        => 'text',
    'active_callback'   => 'portfolio_web_menu_right_button_if_booking'
) );