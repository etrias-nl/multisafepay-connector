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

class TaxTables
{
    /** @var TaxDefaultRule */
    protected $default;

    /** @var TaxRate[] */
    protected $alternate = [];

    public function __construct(TaxDefaultRule $default)
    {
        $this->default = $default;
    }

    public function addAlternateRate(TaxRate $rate)
    {
        $this->alternate[] = $rate;
    }
}
