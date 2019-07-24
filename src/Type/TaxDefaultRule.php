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

class TaxDefaultRule
{
    /** @var bool */
    protected $shippingTaxed;

    /** @var float */
    protected $rate;

    public function __construct(float $rate, bool $shippingTaxed = false)
    {
        $this->rate = $rate;
        $this->shippingTaxed = $shippingTaxed;
    }

    /**
     * @return bool
     */
    public function isShippingTaxed(): bool
    {
        return $this->shippingTaxed;
    }

    /**
     * @param bool $shippingTaxed
     *
     * @return TaxDefaultRule
     */
    public function setShippingTaxed(bool $shippingTaxed): self
    {
        $this->shippingTaxed = $shippingTaxed;

        return $this;
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
     * @return TaxDefaultRule
     */
    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }
}
