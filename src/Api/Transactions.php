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

use Etrias\MultiSafePayConnector\Response\CreateRefundResponse;
use Etrias\MultiSafePayConnector\Serializer\ApiTrait;
use Http\Client\Common\HttpMethodsClientInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientInterface;

class Transactions
{
    use ApiTrait;

    /**
     * @var HttpMethodsClientInterface
     */
    protected $client;

    /**
     * Transactions constructor.
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
     * @param string $orderId
     * @param string $currency
     * @param int    $amount
     * @param string $description
     *
     * @throws \Http\Client\Exception
     *
     * @return CreateRefundResponse
     */
    public function refund(string $orderId, string $currency, int $amount, $description = '', array $headers = [])
    {
        $body = [
            'currency' => $currency,
            'amount' => $amount,
            'description' => $description,
        ];

        $response = $this->client->post(
            sprintf('/orders/%s/refunds', $orderId),
            $headers,
            $this->serializer->serialize($body, 'json')
        );

        return $this->deserializeResponse($response, CreateRefundResponse::class);
    }
}
