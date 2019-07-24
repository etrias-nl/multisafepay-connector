<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Response;

use Etrias\MultiSafePayConnector\Type\DirectOrderCreated;
use Etrias\MultiSafePayConnector\Type\RedirectOrderCreated;

class CreateDirectOrderResponse extends AbstractResponse
{
    /** @var DirectOrderCreated */
    protected $data;

    /**
     * @return DirectOrderCreated
     */
    public function getData()
    {
        return $this->data;
    }
}
