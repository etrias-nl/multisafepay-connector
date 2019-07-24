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

class PaymentMethod
{
    /** @var string */
    protected $accountBic;

    /** @var string */
    protected $accountHolderName;

    /** @var string */
    protected $accountIban;

    /** @var int */
    protected $accountId;

    /** @var int */
    protected $amount;

    /** @var string */
    protected $currency;

    /** @var string */
    protected $description;

    /** @var string */
    protected $externalTransactionId;

    /** @var string */
    protected $paymentDescription;

    /** @var string */
    protected $status;

    /** @var string */
    protected $type;

    /**
     * @return string
     */
    public function getAccountBic(): string
    {
        return $this->accountBic;
    }

    /**
     * @param string $accountBic
     *
     * @return PaymentMethod
     */
    public function setAccountBic(string $accountBic): self
    {
        $this->accountBic = $accountBic;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountHolderName(): string
    {
        return $this->accountHolderName;
    }

    /**
     * @param string $accountHolderName
     *
     * @return PaymentMethod
     */
    public function setAccountHolderName(string $accountHolderName): self
    {
        $this->accountHolderName = $accountHolderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountIban(): string
    {
        return $this->accountIban;
    }

    /**
     * @param string $accountIban
     *
     * @return PaymentMethod
     */
    public function setAccountIban(string $accountIban): self
    {
        $this->accountIban = $accountIban;

        return $this;
    }

    /**
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     *
     * @return PaymentMethod
     */
    public function setAccountId(int $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     *
     * @return PaymentMethod
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return PaymentMethod
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return PaymentMethod
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalTransactionId(): string
    {
        return $this->externalTransactionId;
    }

    /**
     * @param string $externalTransactionId
     *
     * @return PaymentMethod
     */
    public function setExternalTransactionId(string $externalTransactionId): self
    {
        $this->externalTransactionId = $externalTransactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDescription(): string
    {
        return $this->paymentDescription;
    }

    /**
     * @param string $paymentDescription
     *
     * @return PaymentMethod
     */
    public function setPaymentDescription(string $paymentDescription): self
    {
        $this->paymentDescription = $paymentDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return PaymentMethod
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return PaymentMethod
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
