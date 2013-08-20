<?php
/**
 * An indication for a medical therapy that has been formally specified or approved by a regulatory body that regulates use of the therapy; for example, the US FDA approves indications for most drugs in the US.
 *
 * @see    http://schema.org/ApprovedIndication
 * @since  1.0
*/
abstract class TypeApprovedIndication extends TypeMedicalIndication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ApprovedIndication';
}
