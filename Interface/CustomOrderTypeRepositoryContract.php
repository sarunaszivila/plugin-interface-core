<?php

namespace PlentymarketsShopwareCore\Contracts;


use PlentymarketsShopwareCore\Models\CustomOrderType;

/**
 * CustomOrderTypeRepository
 */
interface CustomOrderTypeRepositoryContract
{
    /**
     * @return CustomOrderType[]
     */
    public function get(): array;

    /**
     * @param int $id
     * @return CustomOrderType|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return CustomOrderType|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return array|null
     */
    public function getKeyValueAll(string $key, $value): ?array;
}