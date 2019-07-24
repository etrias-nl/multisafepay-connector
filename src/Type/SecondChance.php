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

class SecondChance
{
    /**
     * @var bool|null
     */
    protected $sendEmail;

    public function __construct(bool $sendEmail = null)
    {
        $this->sendEmail = $sendEmail;
    }

    /**
     * @return bool|null
     */
    public function getSendEmail(): ?bool
    {
        return $this->sendEmail;
    }

    /**
     * @param bool|null $sendEmail
     *
     * @return SecondChance
     */
    public function setSendEmail(?bool $sendEmail): self
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }
}
