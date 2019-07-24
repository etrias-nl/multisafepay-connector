<?php


namespace Etrias\MultiSafePayConnector\Type;


class PaymentOptions
{

    /**
     * @var string
     */
    protected $notificationUrl;

    /** @var string [GET,POST] */
    protected $notificationMethod;

    /**
     * @var string
     */
    protected $redirectUrl;
    /**
     * @var string
     */
    protected $cancelUrl;

    /** @var string */
    protected $closeWindow;

    public function __construct(
        string $notificationUrl,
        string $redirectUrl,
        string $cancelUrl
    )
    {
        $this->notificationUrl = $notificationUrl;
        $this->redirectUrl = $redirectUrl;
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * @return string
     */
    public function getNotificationUrl(): string
    {
        return $this->notificationUrl;
    }

    /**
     * @param string $notificationUrl
     * @return PaymentOptions
     */
    public function setNotificationUrl(string $notificationUrl): PaymentOptions
    {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationMethod(): string
    {
        return $this->notificationMethod;
    }

    /**
     * @param string $notificationMethod
     * @return PaymentOptions
     */
    public function setNotificationMethod(string $notificationMethod): PaymentOptions
    {
        $this->notificationMethod = $notificationMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     * @return PaymentOptions
     */
    public function setRedirectUrl(string $redirectUrl): PaymentOptions
    {
        $this->redirectUrl = $redirectUrl;
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
     * @return PaymentOptions
     */
    public function setCancelUrl(string $cancelUrl): PaymentOptions
    {
        $this->cancelUrl = $cancelUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseWindow(): string
    {
        return $this->closeWindow;
    }

    /**
     * @param string $closeWindow
     * @return PaymentOptions
     */
    public function setCloseWindow(string $closeWindow): PaymentOptions
    {
        $this->closeWindow = $closeWindow;
        return $this;
    }


}