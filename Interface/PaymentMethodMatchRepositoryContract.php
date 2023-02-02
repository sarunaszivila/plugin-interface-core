<?php

namespace PlentymarketsShopwareCore\Contracts;


use PlentymarketsShopwareCore\Models\PaymentMethodMatch;

/**
 * PaymentMethodMatchRepository
 */
interface PaymentMethodMatchRepositoryContract
{
    /**
     * @return PaymentMethodMatch[]
     */
    public function get(): array;

    /**
     * @param int $id
     * @return PaymentMethodMatch|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return PaymentMethodMatch|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return PaymentMethodMatch[]|null
     */
    public function getKeyValueAll(string $key, $value): ?array;
}