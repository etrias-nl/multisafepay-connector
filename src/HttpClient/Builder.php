<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\HttpClient;


use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\RequestFactory;
use Psr\Http\Client\ClientInterface;

class Builder
{
    /**
     * The object that sends HTTP messages.
     *
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * A HTTP client with all our plugins.
     *
     * @var HttpMethodsClient
     */
    protected $pluginClient;

    /**
     * @var RequestFactory
     */
    protected $requestFactory;


    /**
     * @var Plugin[]
     */
    private $plugins = [];
    /**
     * @param HttpClient     $httpClient
     * @param Psr17FactoryDiscovery $requestFactory
     */
    public function __construct(
        HttpClient $httpClient = null,
        RequestFactory $requestFactory = null
    ) {
        $this->httpClient = $httpClient ?: HttpClientDiscovery::find();
        $this->requestFactory = $requestFactory ?: MessageFactoryDiscovery::find();
    }

    /**
     * Add a new plugin to the end of the plugin chain.
     *
     * @param Plugin $plugin
     */
    public function addPlugin(Plugin $plugin)
    {
        $this->plugins[] = $plugin;
    }
    /**
     * Remove a plugin by its fully qualified class name (FQCN).
     *
     * @param string $fqcn
     */
    public function removePlugin($fqcn)
    {
        foreach ($this->plugins as $idx => $plugin) {
            if ($plugin instanceof $fqcn) {
                unset($this->plugins[$idx]);
            }
        }
    }

    /**
     * @return ClientInterface
     */
    public function build()
    {
        return new HttpMethodsClient(
            new PluginClient(
                HttpClientDiscovery::find(),
                $this->plugins
            ),
            $this->requestFactory
        );
    }
}
