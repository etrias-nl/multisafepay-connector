<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Response;

use Etrias\MultiSafePayConnector\Type\RedirectOrderCreated;

class CreateRedirectOrderResponse extends AbstractResponse
{
    /** @var RedirectOrderCreated */
    protected $data;

    /**
     * @return RedirectOrderCreated
     */
    public function getData()
    {
        return $this->data;
    }
}
