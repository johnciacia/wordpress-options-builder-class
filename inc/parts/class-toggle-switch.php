<?php
/**
 * Toggle Switch (On Off)
 *
 * @package    WordPress
 * @subpackage WPOP
 */

namespace WPOP\V_4_1;

/**
 * Class Toggle_Switch
 */
class Toggle_Switch extends Checkbox {

	/**
	 * Input type
	 *
	 * @var string
	 */
	public $input_type = 'toggle_switch';

	/**
	 * Toggle_Switch constructor.
	 *
	 * @param string $i    Slug or ID.
	 * @param array  $args Arguments to customize instance.
	 */
	public function __construct( $i, array $args = [] ) {
		parent::__construct( $i, $args );
		$this->classes = [ 'onOffSwitch-checkbox' ];
	}

	/**
	 * Markup used to create Toggle Switch using CSS based on checked state of hidden checkbox
	 */
	public function label_markup() {
		?>
		<label class="onOffSwitch-label" for="<?php echo esc_attr( $this->id ); ?>">
			<div class="onOffSwitch-inner"></div>
			<span class="onOffSwitch-switch"></span>
		</label>
		<?php
	}
}
