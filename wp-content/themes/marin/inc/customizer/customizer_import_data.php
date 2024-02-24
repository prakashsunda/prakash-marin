<?php
class marin_import_dummy_data {

	private static $instance;

	public static function init() {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof marin_import_dummy_data ) ) {
			self::$instance = new marin_import_dummy_data();
			self::$instance->marin_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */


	/**
	 * Setup the actions used for this class.
	 */
	public function marin_setup_actions() {

		// Enqueue scripts.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'marin_import_customize_scripts' ), 0 );

	}



	public function marin_import_customize_scripts() {

		wp_enqueue_script( 'marin-import-customizer-js', get_template_directory_uri() . '/assets/js/marin-import-customizer.js', array( 'customize-controls' ) );
	}
}

$marin_import_customizers = array(

	'import_data' => array(
		'recommended' => true,

	),
);
marin_import_dummy_data::init( apply_filters( 'marin_import_customizer', $marin_import_customizers ) );
