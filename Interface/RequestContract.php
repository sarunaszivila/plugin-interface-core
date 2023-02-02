<?php

namespace PlentymarketsShopwareCore\Contracts;


use Exception;
use PlentymarketsShopwareCore\Models\Configuration;

/**
 * RequestContract
 */
interface RequestContract
{
    /**
     * @param array $headers
     * @return void
     */
    public function setHeaders(array $headers): void;

    /**
     * @param Configuration $configuration
     * @return string
     */
    public function urlBuilder(Configuration $configuration): string;

    /**
     * @param string $url
     * @param string $method
     * @param $data
     * @param Configuration|null $configuration
     * @param bool $encode
     * @return array|null
     *
     * @throws Exception
     */
    public function make(string $url, string $method, $data = null, Configuration $configuration = null, bool $encode = true): ?array;
}
