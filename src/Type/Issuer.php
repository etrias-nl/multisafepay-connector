<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Type;

class Issuer
{
    /** @var string */
    protected $code;

    /** @var string */
    protected $description;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


}
