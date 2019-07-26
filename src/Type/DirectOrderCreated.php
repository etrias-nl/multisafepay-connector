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

class DirectOrderCreated extends Order
{
    /** @var string */
    protected $paymentUrl;

    /** @var string */
    protected $cancelUrl;

    /** @var string[] */
    protected $gatewayInfo;

    /**
     * @return string
     */
    public function getPaymentUrl(): string
    {
        return $this->paymentUrl;
    }

    /**
     * @param string $paymentUrl
     *
     * @return RedirectOrderCreated
     */
    public function setPaymentUrl(string $paymentUrl): RedirectOrderCreated
    {
        $this->paymentUrl = $paymentUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelUrl(): string
    {
        return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     * @return DirectOrderCreated
     */
    public function setCancelUrl(string $cancelUrl): DirectOrderCreated
    {
        $this->cancelUrl = $cancelUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGatewayInfo(): array
    {
        return $this->gatewayInfo;
    }

    /**
     * @param string[] $gatewayInfo
     * @return DirectOrderCreated
     */
    public function setGatewayInfo(array $gatewayInfo): DirectOrderCreated
    {
        $this->gatewayInfo = $gatewayInfo;
        return $this;
    }


}
