<?php

declare(strict_types=1);


namespace Tests\Etrias\MultiSafePayConnector\Functional\Api;



use Etrias\MultiSafePayConnector\Api\Gateways;
use Etrias\MultiSafePayConnector\Exception\MultiSafePayException;
use Etrias\MultiSafePayConnector\Response\AllGatewaysResponse;
use Etrias\MultiSafePayConnector\Response\GetGatewayResponse;
use Etrias\MultiSafePayConnector\Response\GetIssuersResponse;

class GatewaysTest extends AbstractApiTest
{
    /** @var Gateways */
    protected $gateWayApi;

    protected function setUp(): void
    {
        parent::setUp();
        $this->gateWayApi = new Gateways($this->client, $this->serializer);
    }


    public function testGetAllGateways()
    {
        $response = $this->gateWayApi->getAll();

        $this->assertInstanceOf(AllGatewaysResponse::class, $response);
    }

    public function testGetGateway()
    {
        $response = $this->gateWayApi->get('VISA');
        $this->assertInstanceOf(GetGatewayResponse::class, $response);
    }

    public function testNotExistingGateway()
    {
        $this->expectException(MultiSafePayException::class);
        $this->gateWayApi->get('I_DO_NOT_EXIST');
    }

    public function testGetIssuers()
    {
        $response = $this->gateWayApi->getIssuers();

        $this->assertInstanceOf(GetIssuersResponse::class, $response);
    }

    public function testGetIssuersForInvalidGateway()
    {
        $this->expectException(MultiSafePayException::class);
        $this->gateWayApi->getIssuers('VISA');
    }
}
