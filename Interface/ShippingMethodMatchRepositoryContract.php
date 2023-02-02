<?php

namespace PlentymarketsShopwareCore\Contracts;


use PlentymarketsShopwareCore\Models\ShippingMethodMatch;

/**
 * ShippingMethodMatchRepository
 */
interface ShippingMethodMatchRepositoryContract
{
    /**
     * @return ShippingMethodMatch[]
     */
    public function get(): array;

    /**
     * @param int $id
     * @return ShippingMethodMatch|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return ShippingMethodMatch|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return ShippingMethodMatch[]|null
     */
    public function getKeyValueAll(string $key, $value): ?array;
}