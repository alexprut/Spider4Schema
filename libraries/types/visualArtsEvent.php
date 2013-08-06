<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * Event type: Visual arts event.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/VisualArtsEvent
 * @since       13.1
*/
abstract class TypeVisualArtsEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VisualArtsEvent';
}