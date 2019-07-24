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

namespace Etrias\MultiSafePayConnector\Type;

class TaxRule
{
    /** @var float */
    protected $rate;

    /**
     * @var string|null
     */
    protected $country;

    public function __construct(float $rate, string $country = null)
    {
        $this->rate = $rate;
        $this->country = $country;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     *
     * @return TaxRule
     */
    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     *
     * @return TaxRule
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
