<?php

namespace Composite\LaravelNhtsa;

use GuzzleHttp\Exception\GuzzleException;
use Composite\LaravelNhtsa\Traits\Services;

class Nhtsa
{
    use Services;

    /**
     * @var Gateway
     */
    private Gateway $gateway;

    /**
     * @param Gateway $gateway
     */
    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return Gateway
     */
    private function gateway(): Gateway
    {
        return $this->gateway;
    }

    /**
     * @param string $uri
     * @param array $payload
     *
     * @return array
     * @throws GuzzleException
     */
    public function get(string $uri, array $payload = []): array
    {
        return $this->gateway()->get($uri, $payload);
    }
}
