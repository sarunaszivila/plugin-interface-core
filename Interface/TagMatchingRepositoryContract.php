<?php

namespace PlentymarketsShopwareCore\Contracts;

use PlentymarketsShopwareCore\Models\TagMatching;

interface TagMatchingRepositoryContract
{
    /**
     * @return array
     */
    public function get(): array;

    /**
     * @param int $id
     * @return TagMatching|null
     */
    public function getById(int $id);

    /**
     * @param string $key
     * @param $value
     * @return TagMatching|null
     */
    public function getKeyValue(string $key, $value);

    /**
     * @param string $key
     * @param $value
     * @return array|null
     */
    public function getKeyValueAll(string $key, $value): ?array;

    public function getByConfigAndTagId(int $configurationId, int $tagId): ?TagMatching;
}