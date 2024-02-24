<?php
/** 
 * Customize Heading control class.
 *
 * @package marin
 * 
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class marin_Customize_Upgrade_Control
 */
class marin_Customize_Upgrade_Control extends marin_Customize_Base_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'marin-upgrade';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		$upgrade_to_pro_link = 'https://wpfrank.com/wordpress-themes/marin-premium/';
		?>

		<div class="marin-upgrade-pro-message" style="display:none;";>
			<# if ( data.label ) { #><h4 class="customize-control-title"><?php echo wp_kses_post( 'Upgrade to <a href="'.$upgrade_to_pro_link.'" target="_blank" > Marin Pro </a> to add more', 'marin'); ?> {{{ data.label }}} <?php esc_html_e( 'and get the other premium features.', 'marin') ?></h4><# } #>
		</div>

		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}