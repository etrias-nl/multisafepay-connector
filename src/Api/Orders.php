<?php

declare(strict_types=1);


namespace Etrias\MultiSafePayConnector\Api;


use Etrias\MultiSafePayConnector\Response\CreateDirectOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreatePaymentLinkOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreateRedirectOrderResponse;
use Etrias\MultiSafePayConnector\Response\GetOrderResponse;
use Etrias\MultiSafePayConnector\Serializer\ApiTrait;
use Etrias\MultiSafePayConnector\Type\CheckoutOptions;
use Etrias\MultiSafePayConnector\Type\Customer;
use Etrias\MultiSafePayConnector\Type\Delivery;
use Etrias\MultiSafePayConnector\Type\PaymentOptions;
use Etrias\MultiSafePayConnector\Type\SecondChance;
use Etrias\MultiSafePayConnector\Type\ShoppingCart;
use Http\Client\Common\HttpMethodsClientInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientInterface;

class Orders
{
    use ApiTrait;

    const TYPE_DIRECT = 'direct';
    const TYPE_REDIRECT = 'redirect';
    const TYPE_CHECKOUT = 'checkout';
    const TYPE_PAYMENT_LINK = 'paymentlink';


    /**
     * @var HttpMethodsClientInterface
     */
    protected $client;

    /**
     * Orders constructor.
     * @param ClientInterface $client
     * @param SerializerInterface $serializer
     */
    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {

        $this->client = $client;
        $this->serializer = $serializer;
    }

    /**
     * @param string $orderId
     * @return GetOrderResponse
     * @throws \Http\Client\Exception
     */
    public function getOrder(string $orderId)
    {
        $uri = sprintf('/orders/%s', $orderId);

        $response = $this->client->get($uri);

        return $this->deserializeResponse($response, GetOrderResponse::class);
    }

    /**
     * @param string $orderId
     * @param string $description
     * @param string $currency
     * @param int $amount
     * @param PaymentOptions $paymentOptions
     * @param Customer $customer
     * @param string|null $gateway
     * @param SecondChance|null $secondChance
     * @param Delivery|null $delivery
     * @param ShoppingCart|null $shoppingCart
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function createRedirectOrder(
        string $orderId,
        string $description,
        string $currency,
        int $amount,
        PaymentOptions $paymentOptions,
        Customer $customer = null,
        string $gateway = null,
        SecondChance $secondChance = null,
        Delivery $delivery = null,
        ShoppingCart $shoppingCart = null,
        CheckoutOptions $checkoutOptions = null
    )
    {
        $body = [
            'type' => self::TYPE_REDIRECT,
            'order_id' => $orderId,
            'gateway' => $gateway,
            'currency' => $currency,
            'amount' => $amount,
            'description' => $description,
            'payment_options' => $paymentOptions,
            'customer' => $customer,
            'second_chance' => $secondChance,
            'delivery' => $delivery,
            'shopping_cart' => $shoppingCart,
            'checkout_options' => $checkoutOptions,
        ];

        $response = $this->client->post('/orders',[], $this->serializer->serialize($body, 'json'));

        return $this->deserializeResponse($response, CreateRedirectOrderResponse::class);
    }

    /**
     * @param string $gateway
     * @param string $orderId
     * @param string $description
     * @param string $currency
     * @param int $amount
     * @param PaymentOptions $paymentOptions
     * @param Customer|null $customer
     * @param array $gatewayInfo
     * @param Delivery|null $delivery
     * @param ShoppingCart|null $shoppingCart
     * @param CheckoutOptions|null $checkoutOptions
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function createDirectOrder(
        string $gateway,
        string $orderId,
        string $description,
        string $currency,
        int $amount,
        PaymentOptions $paymentOptions,
        Customer $customer = null,
        $gatewayInfo = [],
        Delivery $delivery = null,
        ShoppingCart $shoppingCart = null,
        CheckoutOptions $checkoutOptions = null
    )
    {
        $body = [
            'type' => self::TYPE_DIRECT,
            'order_id' => $orderId,
            'gateway' => $gateway,
            'gateway_info' => $gatewayInfo,
            'currency' => $currency,
            'amount' => $amount,
            'description' => $description,
            'payment_options' => $paymentOptions,
            'customer' => $customer,
            'delivery' => $delivery,
            'shopping_cart' => $shoppingCart,
            'checkout_options' => $checkoutOptions,
        ];

        echo ($this->serializer->serialize($body, 'json'));
        $response = $this->client->post('/orders',[], $this->serializer->serialize($body, 'json'));

        return $this->deserializeResponse($response, CreateDirectOrderResponse::class);
    }

    /**
     * @param string $gateway
     * @param string $orderId
     * @param string $description
     * @param string $currency
     * @param int $amount
     * @param PaymentOptions $paymentOptions
     * @param Customer|null $customer
     * @param array $gatewayInfo
     * @param Delivery|null $delivery
     * @param ShoppingCart|null $shoppingCart
     * @param CheckoutOptions|null $checkoutOptions
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function createPaymentLinkOrder(
        string $gateway,
        string $orderId,
        string $description,
        string $currency,
        int $amount,
        PaymentOptions $paymentOptions,
        Customer $customer = null,
        array $gatewayInfo = [],
        Delivery $delivery = null,
        ShoppingCart $shoppingCart = null,
        CheckoutOptions $checkoutOptions = null
    )
    {
        $body = [
            'type' => self::TYPE_PAYMENT_LINK,
            'order_id' => $orderId,
            'gateway' => $gateway,
            'gateway_info' => $gatewayInfo,
            'currency' => $currency,
            'amount' => $amount,
            'description' => $description,
            'payment_options' => $paymentOptions,
            'customer' => $customer,
            'delivery' => $delivery,
            'shopping_cart' => $shoppingCart,
            'checkout_options' => $checkoutOptions,
        ];

        $response = $this->client->post('/orders',[], $this->serializer->serialize($body, 'json'));

        return $this->deserializeResponse($response, CreatePaymentLinkOrderResponse::class);
    }
}
