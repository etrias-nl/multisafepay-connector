<?php

declare(strict_types=1);


namespace Tests\Etrias\MultiSafePayConnector\Functional\Api;


use Etrias\MultiSafePayConnector\HttpClient\Builder;
use Etrias\MultiSafePayConnector\HttpClient\Plugin\Authentication;
use Etrias\MultiSafePayConnector\HttpClient\Plugin\ExceptionThrower;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Discovery\UriFactoryDiscovery;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

abstract class AbstractApiTest extends TestCase
{

    /** @var ClientInterface */
    protected $client;

    protected function setUp(): void
    {
        $clientBuilder = new Builder();
        $clientBuilder->addPlugin(new ErrorPlugin(['only_server_exception' => true]));
        $clientBuilder->addPlugin(new BaseUriPlugin(UriFactoryDiscovery::find()->createUri(getenv('ENDPOINT'))));
        $clientBuilder->addPlugin(new Authentication(getenv('API_KEY')));
        $clientBuilder->addPlugin(new ExceptionThrower());

        $this->client = $clientBuilder->build();
    }
}
