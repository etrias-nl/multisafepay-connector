<?php

declare(strict_types=1);


namespace Tests\Etrias\MultiSafePayConnector\Functional\Api;



use Etrias\MultiSafePayConnector\Api\Transactions;
use Etrias\MultiSafePayConnector\Response\CreateDirectOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreatePaymentLinkOrderResponse;
use Etrias\MultiSafePayConnector\Response\CreateRedirectOrderResponse;
use Etrias\MultiSafePayConnector\Type\CheckoutOptions;
use Etrias\MultiSafePayConnector\Type\Customer;
use Etrias\MultiSafePayConnector\Type\GatewayInfo;
use Etrias\MultiSafePayConnector\Type\PaymentOptions;
use Etrias\MultiSafePayConnector\Type\ShoppingCart;
use Etrias\MultiSafePayConnector\Type\ShoppingCartItem;
use Etrias\MultiSafePayConnector\Type\TaxDefaultRule;
use Etrias\MultiSafePayConnector\Type\TaxTables;

class TransactionsTest extends AbstractApiTest
{
    /** @var Transactions */
    protected $transactionsApi;

    protected function setUp(): void
    {
        parent::setUp();
        $this->transactionsApi = new Transactions($this->client, $this->serializer);
    }


    public function testRefund()
    {
//        $response = $this->transactionsApi->refund('TEST-ORDER-9516', 'EUR', 7895);
    }
}
