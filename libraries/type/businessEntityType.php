<?php
/**
 * A business entity type is a conceptual entity representing the legal form, the size, the main line of business, the position in the value chain, or any combination thereof, of an organization or business person.

Commonly used values:

http://purl.org/goodrelations/v1#Business
http://purl.org/goodrelations/v1#Enduser
http://purl.org/goodrelations/v1#PublicInstitution
http://purl.org/goodrelations/v1#Reseller

		
 *
 * @see    http://schema.org/BusinessEntityType
 * @since  1.0
*/
abstract class TypeBusinessEntityType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BusinessEntityType';
}
