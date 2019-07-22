<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Api;

use Etrias\EwarehousingConnector\Response\InboundResponse;
use Etrias\MultiSafePayConnector\Response\AllGatewaysResponse;
use Etrias\MultiSafePayConnector\Serializer\ApiTrait;
use Etrias\MultiSafePayConnector\Type\Gateway;
use Http\Client\Common\HttpMethodsClientInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientInterface;

class Gateways
{
    use ApiTrait;

    /**
     * @var HttpMethodsClientInterface
     */
    protected $client;

    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {

        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function getAll()
    {
        $response = $this->client->get('/gateways');

        return $this->deserializeResponse($response, AllGatewaysResponse::class);
    }
}
