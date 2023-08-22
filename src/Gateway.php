<?php

namespace Composite\LaravelNhtsa;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
class Gateway
{
    /**
     * @var Client
     */
    protected Client $client;

    /**
     * @param string|null $service_url
     */
    public function __construct(?string $service_url)
    {
        $this->client = new Client([
            'base_uri' => $service_url,
            'verify' => false,
            'debug' => false,
        ]);
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
        return $this->request('GET', $uri, [
            'query' => $payload,
        ]);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $payload
     *
     * @return array
     * @throws GuzzleException
     * @throws Exception
     */
    protected function request(string $method, string $uri, array $payload = []): array
    {
        $defaultOptions = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ];

        $response = $this->client->request($method, $uri, array_merge($defaultOptions, $payload));

        if ($response->getStatusCode() !== 200) {
            throw new Exception('Error while requesting data from NHTSA API');
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}
