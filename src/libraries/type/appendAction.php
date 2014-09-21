<?php
/**
 * The act of inserting at the end if an ordered collection.
 *
 * @see    http://schema.org/AppendAction
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
