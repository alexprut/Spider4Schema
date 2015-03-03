<?php
/**
 * A private parcel service as the delivery mode available for a certain offer. Commonly used values: http://purl.org/goodrelations/v1#DHL http://purl.org/goodrelations/v1#FederalExpress http://purl.org/goodrelations/v1#UPS
 *
 * @see    http://schema.org/ParcelService
*/
abstract class TypeParcelService extends TypeDeliveryMethod
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ParcelService';
}
