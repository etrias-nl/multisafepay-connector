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

class Weight
{
    /**
     * @var float
     */
    protected $value;

    /**
     * @var string
     */
    protected $unit;

    public function __construct(float $value, string $unit)
    {
        $this->value = $value;
        $this->unit = $unit;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     *
     * @return Weight
     */
    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return Weight
     */
    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }
}
