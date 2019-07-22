<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Response;

use Etrias\MultiSafePayConnector\Type\Gateway;

class AllGatewaysResponse extends AbstractResponse
{
    /** @var Gateway[] */
    protected $data;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}
