<?php

declare(strict_types=1);


namespace Tests\Etrias\MultiSafePayConnector\Functional\Api;



use Etrias\MultiSafePayConnector\Api\Orders;
use Etrias\MultiSafePayConnector\Response\CreateDirectOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreatePaymentLinkOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreateRedirectOrderResponse;
use Etrias\MultiSafePayConnector\Response\GetOrderResponse;
use Etrias\MultiSafePayConnector\Type\CheckoutOptions;
use Etrias\MultiSafePayConnector\Type\Customer;
use Etrias\MultiSafePayConnector\Type\GatewayInfo;
use Etrias\MultiSafePayConnector\Type\PaymentOptions;
use Etrias\MultiSafePayConnector\Type\ShoppingCart;
use Etrias\MultiSafePayConnector\Type\ShoppingCartItem;
use Etrias\MultiSafePayConnector\Type\TaxDefaultRule;
use Etrias\MultiSafePayConnector\Type\TaxTables;

class OrdersTest extends AbstractApiTest
{
    /** @var Orders */
    protected $ordersApi;

    protected function setUp(): void
    {
        parent::setUp();
        $this->ordersApi = new Orders($this->client, $this->serializer);
    }


    public function testCreateRedirectOrder()
    {
        $orderId = 'TEST-ORDER-'.rand(0,9999);

        $paymentOptions = new PaymentOptions(
            'https://notify.me',
            'https://redirect.me',
            'https://cancel.me'
        );

        $response = $this->ordersApi->createRedirectOrder(
            $orderId,
            $orderId,
            'EUR',
            7895,
            $paymentOptions,
            null
        );

        $this->assertInstanceOf(CreateRedirectOrderResponse::class, $response);
    }

    public function testCreatePaymentLink()
    {
        $orderId = 'TEST-ORDER-'.rand(0,9999);

        $paymentOptions = new PaymentOptions(
            'https://notify.me',
            'https://redirect.me',
            'https://cancel.me'
        );

        $response = $this->ordersApi->createPaymentLinkOrder(
            'ideal',
            $orderId,
            $orderId,
            'EUR',
            7895,
            $paymentOptions,
            ['issuer_id' => '0021']
        );

        $this->assertInstanceOf(CreatePaymentLinkOrderResponse::class, $response);
    }

    public function testKlarnaOrder()
    {
        $orderId = 'TEST-ORDER-'.rand(0,9999);

        $paymentOptions = new PaymentOptions(
            'https://notify.me',
            'https://redirect.me',
            'https://cancel.me'
        );

        $customer = new Customer();
        $customer->setFirstName('first name');
        $customer->setAddress1('address line 1');
        $customer->setHouseNumber('housenumber');
        $customer->setZipCode('zipcode');
        $customer->setCity('city');
        $customer->setCountry( 'NL');

        $gatewayInfo = [
            'gender' => 'M',
            'birthday' => (new \DateTime('-19 years'))->format('Y-m-d'),
            'phone' => '0612345678',
            'email' => 'test@test.com',
        ];

        $shoppingItem = new ShoppingCartItem('1234', 'product name', 50, 1);
        $shoppingCart = new ShoppingCart([$shoppingItem]);

        $taxTables = new TaxTables(new TaxDefaultRule(0.21, true));

        $checkoutOptions  = new CheckoutOptions();
        $checkoutOptions->setTaxTables($taxTables);

        $this->expectExceptionCode(1000);

        $response = $this->ordersApi->createDirectOrder(
            'klarna',
            $orderId,
            $orderId,
            'EUR',
            6050,
            $paymentOptions,
            $customer,
            $gatewayInfo,
            null,
            $shoppingCart,
            $checkoutOptions
        );

        $this->assertInstanceOf(CreateDirectOrderResponse::class, $response);
    }

    public function testGetOrder()
    {
        $response = $this->ordersApi->getOrder('TEST-ORDER-9516', 'EUR');

        $this->assertInstanceOf(GetOrderResponse::class, $response);
    }
}
