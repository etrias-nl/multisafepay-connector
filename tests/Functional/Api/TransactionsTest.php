<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tests\Etrias\MultiSafePayConnector\Functional\Api;

use Etrias\MultiSafePayConnector\Api\Transactions;

/**
 * @coversNothing
 */
class TransactionsTest extends AbstractApiTest
{
    /** @var Transactions */
    protected $transactionsApi;

    protected function setUp(): void
    {
        parent::setUp();
        $this->transactionsApi = new Transactions($this->client, $this->serializer);
    }

    public function testRefund()
    {
//        $response = $this->transactionsApi->refund('TEST-ORDER-9516', 'EUR', 7895);
    }
}
