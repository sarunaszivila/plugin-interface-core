<?php

namespace PlentymarketsShopwareCore\Contracts;


use PlentymarketsShopwareCore\Models\Configuration;

/**
 * ConfigurationRepository
 */
interface ConfigurationRepositoryContract
{
    /**
     * @return Configuration[]
     */
    public function get(): array;

    /**
     * @param int $id
     * @return Configuration|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return Configuration|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return Configuration[]|null
     */
    public function getKeyValueAll(string $key, $value): ?array;
}