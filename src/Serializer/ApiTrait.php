<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\MultiSafePayConnector\Serializer;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;

trait ApiTrait
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @param ResponseInterface      $response
     * @param string                 $className
     * @param DeserializationContext $context
     *
     * @return mixed
     */
    protected function deserializeResponse(ResponseInterface $response, $className, DeserializationContext $context = null)
    {
        $content = $response->getBody()->getContents();

        return $this->serializer->deserialize(
            $content,
            $className,
            'json',
            $context
        );
    }
}
