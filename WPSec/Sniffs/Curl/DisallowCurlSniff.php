<?php
/**
 * Custom WordPress Coding Standard.
 * @author  WpShield.IO
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WPShield\WPSec\Sniffs;

use WordPressCS\WordPress\AbstractFunctionRestrictionsSniff;

/**
 * Encourages use of wp_remote_get() and wp_remote_post().
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   1.0.0
 */
class DisallowCurlSniff extends AbstractFunctionRestrictionsSniff {

	/**
	 * Groups of functions to restrict.
	 *
	 * Example: groups => array(
	 *  'lambda' => array(
	 *      'type'      => 'error' | 'warning',
	 *      'message'   => 'Use anonymous functions instead please!',
	 *      'functions' => array( 'file_get_contents', 'create_function' ),
	 *  )
	 * )
	 *
	 * @return array
	 */
	public function getGroups() {
		return array(
			'curl_exec' => array(
				'type'      => 'error',
				'message'   => '%s() found. Use HTTP API (wp_remote_get, wp_remote_post) Instead of CURL - WPShield.',
				'functions' => array(
					'curl_exec',
				),
			),
		);
	}

}
