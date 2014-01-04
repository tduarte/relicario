<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_r_';

	$meta_boxes['test_metabox'] = array(
		'id'         => 'test_metabox',
		'title'      => __( 'Configurar Página', 'cmb' ),
		'pages'      => array( 'page', 'post'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name' => __( 'Escolha a Cor', 'cmb' ),
				'desc' => __( 'cor que será utilizada na página (opcional)', 'cmb' ),
				'id'   => $prefix . 'color',
				'type' => 'colorpicker',
				'std'  => '#ffffff'
			)
		),
	);

	/**
	 * Metabox for the user profile screen
	 */
	$meta_boxes['user_edit'] = array(
		'id'         => 'user_edit',
		'title'      => __( 'User Profile Metabox', 'cmb' ),
		'pages'      => array( 'user' ), // Tells CMB to use user_meta vs post_meta
		'show_names' => true,
		// 'cmb_styles' => true, // Show cmb bundled styles.. not needed on user profile page
		'fields'     => array(
			array(
				'name' => __( 'Avatar', 'cmb' ),
				'desc' => __( 'sua carinha linda (ou não)', 'cmb' ),
				'id'   => $prefix . 'avatar',
				'type' => 'file',
				'save_id' => true,
				'std'  => 'http://placehold.it/150x150'
			),
			array(
				'name' => __( 'Facebook URL', 'cmb' ),
				'desc' => __( 'http://www.facebook.com/usuario (opcional)', 'cmb' ),
				'id'   => $prefix . 'facebookurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Google+ URL', 'cmb' ),
				'desc' => __( 'http://plus.google.com/usuario (opcional)', 'cmb' ),
				'id'   => $prefix . 'googleplusurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Behance URL', 'cmb' ),
				'desc' => __( 'http://be.net/usuario (opcional)', 'cmb' ),
				'id'   => $prefix . 'linkedinurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Quantos pontos fez no último evento?', 'cmb' ),
				'desc' => __( 'Se nunca foi em um evento, coloque 0', 'cmb' ),
				'id'   => $prefix . 'xp',
				'type' => 'text',
			),
		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
