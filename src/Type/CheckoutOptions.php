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

class CheckoutOptions
{
    /** @var TaxTables */
    protected $taxTables;

    /**
     * @return TaxTables
     */
    public function getTaxTables(): TaxTables
    {
        return $this->taxTables;
    }

    /**
     * @param TaxTables $taxTables
     *
     * @return CheckoutOptions
     */
    public function setTaxTables(TaxTables $taxTables): self
    {
        $this->taxTables = $taxTables;

        return $this;
    }
}
