<?php


namespace Etrias\MultiSafePayConnector\Type;


class DirectOrderCreated
{
    /** @var string */
    protected $orderId;

    /** @var string */
    protected $paymentUrl;

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return RedirectOrderCreated
     */
    public function setOrderId(string $orderId): RedirectOrderCreated
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentUrl(): string
    {
        return $this->paymentUrl;
    }

    /**
     * @param string $paymentUrl
     * @return RedirectOrderCreated
     */
    public function setPaymentUrl(string $paymentUrl): RedirectOrderCreated
    {
        $this->paymentUrl = $paymentUrl;
        return $this;
    }


}