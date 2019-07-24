<?php

declare(strict_types=1);


namespace Etrias\MultiSafePayConnector\HttpClient\Plugin;


use Etrias\MultiSafePayConnector\Exception\MultiSafePayException;
use Etrias\MultiSafePayConnector\HttpClient\Message\ResponseMediator;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ExceptionThrower implements Plugin
{

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
        return $next($request)->then(function (ResponseInterface $response) {
            if ($response->getStatusCode() < 500) {
                $content = ResponseMediator::getContent($response);
                if (is_array($content) && isset($content['success']) && $content['success'] === false) {
                    $message = $content['error_info'] ?? '';
                    $code = $content['error_code'] ?? 0;
                    throw new MultiSafePayException($message, $code);
                }
            }

            return $response;
        });
    }
}
