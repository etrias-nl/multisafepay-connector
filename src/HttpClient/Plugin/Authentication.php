<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

class Authentication implements Plugin
{
    /**
     * @var string
     */
    protected $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Handle the request and return the response coming from the next callable.
     *
     * @see http://docs.php-http.org/en/latest/plugins/build-your-own.html
     *
     * @param callable $next Next middleware in the chain, the request is passed as the first argument
     * @param callable $first First middleware in the chain, used to to restart a request
     *
     * @return Promise Resolves a PSR-7 Response or fails with an Http\Client\Exception (The same as HttpAsyncClient)
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $request = $request->withHeader('api_key', $this->apiKey);

        return $next($request);
    }
}
