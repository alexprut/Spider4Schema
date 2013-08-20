<?php
/**
 * Event type: Visual arts event.
 *
 * @see    http://schema.org/VisualArtsEvent
 * @since  1.0
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
