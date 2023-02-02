<?php

namespace PlentymarketsShopwareCore\Contracts;


use PlentymarketsShopwareCore\Models\Referrer;

/**
 * ReferrerRepository
 */
interface ReferrerRepositoryContract
{
    /**
     * @return Referrer[]
     */
    public function get(): array;

    /**
     * @param int $id
     * @return Referrer|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return Referrer|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return Referrer[]|null
     */
    public function getKeyValueAll(string $key, $value): ?array;

    /**
     * @param int $id
     * @param bool $returnByKey
     * @return Referrer[]
     */
    public function getByConfigurationId(int $id, bool $returnByKey = false): array;

    /**
     * @param int $id
     * @param string $salesId
     * @return Referrer|null
     */
    public function getByConfigurationIdAndSalesChannelId(int $id, string $salesId): ?Referrer;
}