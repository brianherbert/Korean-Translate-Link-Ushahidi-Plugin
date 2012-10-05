<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Korean Machine Translations Hook
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author	   Ushahidi Team <team@ushahidi.com>
 * @package	   Ushahidi - http://source.ushahididev.com
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license	   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL)
 */

class kotrans {

	/**
	 * Registers the main event add method
	 */

	public function __construct()
	{
		// Listen for the report description
		Event::add('ushahidi_filter.report_description', array($this, 'add_translate_link'));
	}


	public function add_translate_link()
	{
		// Get the description from the filter
		$description = Event::$data;

		$description .= '<br/><a href="http://translate.google.com/#en/ko/'.urlencode($description).'">번역</a>';

		// Return modified description body
		Event::$data = $description;
	}

}
new kotrans;
