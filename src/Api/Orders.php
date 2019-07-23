<?php

declare(strict_types=1);


namespace Etrias\MultiSafePayConnector\Api;


use Etrias\MultiSafePayConnector\Serializer\ApiTrait;
use Http\Client\Common\HttpMethodsClientInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientInterface;

class Orders
{
    use ApiTrait;

    const TYPE_DIRECT = 'direct';
    const TYPE_REDIRECT = 'redirect';


    /**
     * @var HttpMethodsClientInterface
     */
    protected $client;

    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {

        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function createOrder(string $type, $gateway = null)
    {

    }
}
