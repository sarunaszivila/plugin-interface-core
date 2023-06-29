<?php

namespace PlentymarketsShopwareCore\Contracts;

use PlentymarketsShopwareCore\Models\CustomerClassMatch;

interface CustomerClassMatchRepositoryContract
{
    /**
     * @return array
     */
    public function get(): array;

    /**
     * @param int $id
     * @return CustomerClassMatch|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return CustomerClassMatch|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return array|null
     */
    public function getKeyValueAll(string $key, $value): ?array;

    /**
     * Get CustomerClassMatch by configuration and shopware class id's
     *
     * @param int $configurationId
     * @param string $shopwareClassId
     * @return CustomerClassMatch|null
     */
    public function getByConfigAndShopwareClassId(int $configurationId, string $shopwareClassId): ?CustomerClassMatch;

    /**
     * Get CustomerClassMatch by configuration and class id's
     *
     * @param int $configurationId
     * @param int $classId
     *
     * @return CustomerClassMatch|null
     */
    public function getByConfigAndClassId(int $configurationId, int $classId): ?CustomerClassMatch;
}