<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\MultiSafePayConnector\Api;

use Etrias\MultiSafePayConnector\Response\AllGatewaysResponse;
use Etrias\MultiSafePayConnector\Response\GetGatewayResponse;
use Etrias\MultiSafePayConnector\Response\GetIssuersResponse;
use Etrias\MultiSafePayConnector\Serializer\ApiTrait;
use Etrias\MultiSafePayConnector\Type\Gateway;
use GuzzleHttp\Psr7\Uri;
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

    /**
     * Gateways constructor.
     *
     * @param ClientInterface     $client
     * @param SerializerInterface $serializer
     */
    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    /**
     * @param string|null $country  ISO-3166-1
     * @param string|null $currency ISO-4217
     * @param int|null    $amount   in cents
     * @param string|null $include
     *
     * @throws \Http\Client\Exception
     *
     * @return AllGatewaysResponse
     */
    public function getAll(string $country = null, string $currency = null, int $amount = null, string $include = null)
    {
        $uri = new Uri('/gateways');

        $uri = $uri->withQuery(http_build_query([
            'country' => $country,
            'currency' => $currency,
            'amount' => $amount,
            'include' => $include,
        ]));

        $response = $this->client->get($uri);

        return $this->deserializeResponse($response, AllGatewaysResponse::class);
    }

    /**
     * @param string $id Gateway id
     *
     * @throws \Http\Client\Exception
     *
     * @return GetGatewayResponse
     */
    public function get(string $id)
    {
        $response = $this->client->get(sprintf('/gateways/%s', $id));

        return $this->deserializeResponse($response, GetGatewayResponse::class);
    }

    /**
     * @param string $id
     *
     * @throws \Http\Client\Exception
     *
     * @return GetIssuersResponse
     */
    public function getIssuers(string $id = 'ideal')
    {
        $response = $this->client->get(sprintf('/issuers/%s', $id));

        return $this->deserializeResponse($response, GetIssuersResponse::class);
    }
}
