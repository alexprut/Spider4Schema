<?php
/**
 * An agent quotes/estimates/appraises an object/product/service with a price at a location/store.
 *
 * @see    http://schema.org/QuoteAction
*/
abstract class TypeQuoteAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/QuoteAction';
}
