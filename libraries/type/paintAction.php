<?php
/**
 * The act of producing a painting, typically with paint and canvas as instruments.
 *
 * @see    http://schema.org/PaintAction
 * @since  1.0
*/
abstract class TypePaintAction extends TypeCreateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PaintAction';
}
