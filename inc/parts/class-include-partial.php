<?php
/**
 * Include Partial
 *
 * @package    WordPress
 * @subpackage WPOP
 */

namespace WPOP\V_4_1;

/**
 * Class Include_Partial
 *
 * @package WPOP\V_3_0
 */
class Include_Partial extends Part {
	/**
	 * File name
	 *
	 * @var string
	 */
	public $filename;

	/**
	 * Input type
	 *
	 * @var string
	 */
	public $input_type = 'include_partial';

	/**
	 * Include_Partial constructor.
	 *
	 * @param string $i      Slug or ID.
	 * @param array  $config Configuration arguments for customizing object instance.
	 */
	public function __construct( $i, $config ) {
		parent::__construct( $i, [] );
		$this->filename = ( ! empty( $config['filename'] ) ) ? $config['filename'] : 'set_the_filename.php';
	}

	/**
	 * Main render function.
	 */
	public function render() {
		if ( ! empty( $this->filename ) && is_file( $this->filename ) ) { ?>
			<li class="<?php echo esc_attr( $this->get_clean_classname() ); ?>">
				<?php
				// @codingStandardsIgnoreLine - old phpcs notation
				echo wp_kses( file_get_contents( $this->filename ), wp_kses_allowed_html() ); // phpcs:ignore - allow file get contents.
				?>
			</li>
			<?php
		}
	}

}
