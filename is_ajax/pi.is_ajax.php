<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Is AJAX
 *
 * @package			Is AJAX
 * @version			1.2.0
 * @author			Trevor Davis <http://trevordavis.net>
 * @license 		Creative Commons Attribution Non-Commercial Share Alike
 */

class Is_ajax {

	public function __construct() {
		$this->return_data = ee()->input->is_ajax_request() ? '"true"' : '"false"';
	}

	public static function usage() {
		ob_start();
	?>

		Returns true or false depending if it's an AJAX request.

		{if {exp:is_ajax} == "true"}
			OH YEAAAH
		{if:else}
			OH NOOO
		{/if}

	<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}
