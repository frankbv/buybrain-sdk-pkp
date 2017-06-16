<?php
namespace Buybrain\Buybrain\Entity;

/**
 * Represents the sale of a particular SKU at a particular date.
 * Can represent a cancellation by using a negative quantity.
 *
 * @see CustomerOrder
 */
class Sale extends TemporalSkuQuantity
{

}
