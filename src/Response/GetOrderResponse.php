<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Response;

use Etrias\MultiSafePayConnector\Type\Order;

class GetOrderResponse extends AbstractResponse
{
    /** @var Order */
    protected $data;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}
