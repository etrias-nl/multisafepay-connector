<?php

declare(strict_types=1);


namespace Tests\Etrias\MultiSafePayConnector\Functional\Api;



use Etrias\MultiSafePayConnector\Api\Gateways;
use Etrias\MultiSafePayConnector\Response\AllGatewaysResponse;

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
}
