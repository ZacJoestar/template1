<?php
/**
 * Created by PhpStorm.
 * User: Clément Hmich
 * Date: 02/10/2018
 * Time: 15:15
 */

add_action( 'wp_enqueue_scripts', 'enqueue_theme_css' );

function enqueue_theme_css()
{
	wp_enqueue_style(
		'theme',
		get_template_directory_uri() . '/dist/css/theme.css'
	);
}