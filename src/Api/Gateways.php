<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Api;

use Etrias\EwarehousingConnector\Response\InboundResponse;
use Etrias\MultiSafePayConnector\Response\AllGatewaysResponse;
use Etrias\MultiSafePayConnector\Response\GetGatewayResponse;
use Etrias\MultiSafePayConnector\Response\GetIssuersResponse;
use Etrias\MultiSafePayConnector\Serializer\ApiTrait;
use Etrias\MultiSafePayConnector\Type\Gateway;
use GuzzleHttp\Psr7\Uri;
use Http\Client\Common\HttpMethodsClientInterface;
use Http\Message\UriFactory\SlimUriFactory;
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

    /**
     * @param string|null $country ISO-3166-1
     * @param string|null $currency ISO-4217
     * @param int|null $amount in cents
     * @param string|null $include
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getAll(string $country = null, string $currency = null, int $amount = null, string $include = null)
    {

        $uri = new Uri('/gateways');

        $uri = $uri->withQuery(http_build_query([
            'country' => $country,
            'currency' => $currency,
            'amount' => $amount,
            'include' => $include
        ]));

        $response = $this->client->get($uri);

        return $this->deserializeResponse($response, AllGatewaysResponse::class);
    }

    /**
     * @param string $id Gateway id
     * @return GetGatewayResponse
     * @throws \Http\Client\Exception
     */
    public function get(string $id)
    {
        $response = $this->client->get(sprintf('/gateways/%s', $id));

        return $this->deserializeResponse($response, GetGatewayResponse::class);
    }

    public function getIssuers(string $id = 'ideal')
    {
        $response = $this->client->get(sprintf('/issuers/%s', $id));

        return $this->deserializeResponse($response, GetIssuersResponse::class);
    }
}
