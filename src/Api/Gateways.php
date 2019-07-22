<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Api;

use Http\Client\Common\HttpMethodsClientInterface;
use Psr\Http\Client\ClientInterface;

class Gateways
{
    /**
     * @var HttpMethodsClientInterface
     */
    protected $client;

    public function __construct(ClientInterface $client)
    {

        $this->client = $client;
    }

    public function getAll()
    {

        return $this->client->get('/gateways');
    }
}
