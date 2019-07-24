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

namespace Etrias\MultiSafePayConnector\Response;

use Etrias\MultiSafePayConnector\Type\RefundCreated;

class CreateRefundResponse extends AbstractResponse
{
    /** @var RefundCreated */
    protected $data;

    /**
     * @return RefundCreated
     */
    public function getData()
    {
        return $this->data;
    }
}
