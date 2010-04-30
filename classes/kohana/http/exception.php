<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @package    Kohana
 * @category   Exceptions
 * @author     Kohana Team
 * @copyright  (c) 2009 Kohana Team
 * @license    http://kohanaphp.com/license
 */

class Kohana_HTTP_Exception extends Kohana_Exception {

	/**
	 * @access protected
	 * @var    int
	 */
	protected $_status;

	public function __construct($status = 404, $message = NULL, array $values = NULL, $code = 0)
	{
		$this->_status = $status;
		if ( ! $message)
		{
			$message = arr::get(Request::$messages, $status);
		}
		parent::__construct($message, $values, $code);
	}

	/**
	 * Returns the supplied HTTP status code.
	 *
	 * @access public
	 * @return void
	 * @author Aron Carroll
	 */
	public function getStatus()
	{
		return $this->_status;
	}
} // End Kohana_HTTP_Exception
