<?php
/**
 * The act of inserting at the end if an ordered collection.
 *
 * @see    http://schema.org/AppendAction
 * @since  1.0
*/
abstract class TypeAppendAction extends TypeInsertAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AppendAction';
}
