<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Response;

class AbstractResponse
{
    protected $success;

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }
}
