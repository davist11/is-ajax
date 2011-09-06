<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'Is Ajax?',
	'pi_version' => '1.0',
	'pi_author' => 'Trevor Davis',
	'pi_author_url' => 'http://trevordavis.net',
	'pi_description' => 'Determine if it is an AJAX request and return true or false',
	'pi_usage' => Is_ajax::usage()
);

/**
 * Is AJAX
 *
 * @package			Is AJAX
 * @version			1.0
 * @author			Trevor Davis <http://trevordavis.net>
 * @license 		Creative Commons Attribution Non-Commercial Share Alike
 */
class Is_ajax {
	var $return_data;
	
	/**
	 * Constructor
	 */
	public function Is_ajax() {
		$this->EE =& get_instance();
		$this->return_data = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') ? '"true"' : '"false"';
	}
	
	public function usage() {
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
