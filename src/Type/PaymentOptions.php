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
    ) {
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
     *
     * @return PaymentOptions
     */
    public function setNotificationUrl(string $notificationUrl): self
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
     *
     * @return PaymentOptions
     */
    public function setNotificationMethod(string $notificationMethod): self
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
     *
     * @return PaymentOptions
     */
    public function setRedirectUrl(string $redirectUrl): self
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
     *
     * @return PaymentOptions
     */
    public function setCancelUrl(string $cancelUrl): self
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
     *
     * @return PaymentOptions
     */
    public function setCloseWindow(string $closeWindow): self
    {
        $this->closeWindow = $closeWindow;

        return $this;
    }
}
