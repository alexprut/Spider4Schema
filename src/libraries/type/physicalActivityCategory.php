<?php
/**
 * Categories of physical activity, organized by physiologic classification.
 *
 * @see    http://schema.org/PhysicalActivityCategory
*/
abstract class TypePhysicalActivityCategory extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PhysicalActivityCategory';
}
