<?php


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
     * @return PaymentMethod
     */
    public function setAccountBic(string $accountBic): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setAccountHolderName(string $accountHolderName): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setAccountIban(string $accountIban): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setAccountId(int $accountId): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setAmount(int $amount): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setCurrency(string $currency): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setDescription(string $description): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setExternalTransactionId(string $externalTransactionId): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setPaymentDescription(string $paymentDescription): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setStatus(string $status): PaymentMethod
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
     * @return PaymentMethod
     */
    public function setType(string $type): PaymentMethod
    {
        $this->type = $type;
        return $this;
    }


}