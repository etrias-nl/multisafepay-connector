<?php

declare(strict_types=1);

namespace Etrias\MultiSafePayConnector\Type;

class Gateway
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $description;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


}
