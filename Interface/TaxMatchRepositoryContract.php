<?php

namespace PlentymarketsShopwareCore\Contracts;


use PlentymarketsShopwareCore\Models\TaxMatch;

/**
 * TaxMatchRepository
 */
interface TaxMatchRepositoryContract
{
    /**
     * @return TaxMatch[]
     */
    public function get(): array;

    /**
     * @param int $id
     * @return TaxMatch|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return TaxMatch|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return TaxMatch[]|null
     */
    public function getKeyValueAll(string $key, $value): ?array;

    /**
     * @param int $configurationId
     * @param int $taxId
     * @return TaxMatch|null
     */
    public function getByConfigAndTaxId(int $configurationId, int $taxId): ?TaxMatch;

    /**
     * @param int $configurationId
     * @param string $shopwareTaxId
     * @return TaxMatch|null
     */
    public function getByConfigAndShopwareTaxId(int $configurationId, string $shopwareTaxId): ?TaxMatch;
}