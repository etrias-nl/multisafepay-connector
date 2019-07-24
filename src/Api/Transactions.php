<?php

declare(strict_types=1);


namespace Etrias\MultiSafePayConnector\Api;


use Etrias\MultiSafePayConnector\Response\AllGatewaysResponse;
use Etrias\MultiSafePayConnector\Response\CreateDirectOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreatePaymentLinkOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreateRedirectOrderResponse;
use Etrias\MultiSafePayConnector\Serializer\ApiTrait;
use Etrias\MultiSafePayConnector\Type\CheckoutOptions;
use Etrias\MultiSafePayConnector\Type\Customer;
use Etrias\MultiSafePayConnector\Type\Delivery;
use Etrias\MultiSafePayConnector\Type\GatewayInfo;
use Etrias\MultiSafePayConnector\Type\PaymentOptions;
use Etrias\MultiSafePayConnector\Type\SecondChance;
use Etrias\MultiSafePayConnector\Type\ShoppingCart;
use Etrias\MultiSafePayConnector\Type\TaxTables;
use GuzzleHttp\Psr7\Uri;
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

    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {

        $this->client = $client;
        $this->serializer = $serializer;
    }

    /**
     * @param string $orderId
     * @param string $currency
     * @param int $amount
     * @param string $description
     */
    public function refund(string $orderId, string $currency, int $amount, $description ='')
    {

        $body = [
            'currency' => $currency,
            'amount' => $amount,
            'description' => $description,
        ];

        $response = $this->client->post(
            sprintf('/orders/%s/refunds', $orderId),
            [],
            $this->serializer->serialize($body, 'json')
        );

        return $this->deserializeResponse($response, CreateRedirectOrderResponse::class);
    }

}