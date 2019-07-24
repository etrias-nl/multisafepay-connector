<?php


namespace Etrias\MultiSafePayConnector\Type;


class PaymentDetails
{
    /** @var int|null */
    protected $recurringId;

    /** @var string */
    protected $type;

    /** @var int */
    protected $accountId;

    /** @var string */
    protected $accountHolderName;

    /** @var int */
    protected $externalTransactionId;

    /** @var string */
    protected $accountIban;

    /** @var string */
    protected $accountBic;

    /** @var int|null */
    protected $issuerId;

    /**
     * @return int|null
     */
    public function getRecurringId(): ?int
    {
        return $this->recurringId;
    }

    /**
     * @param int|null $recurringId
     * @return PaymentDetails
     */
    public function setRecurringId(?int $recurringId): PaymentDetails
    {
        $this->recurringId = $recurringId;
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
     * @return PaymentDetails
     */
    public function setType(string $type): PaymentDetails
    {
        $this->type = $type;
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
     * @return PaymentDetails
     */
    public function setAccountId(int $accountId): PaymentDetails
    {
        $this->accountId = $accountId;
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
     * @return PaymentDetails
     */
    public function setAccountHolderName(string $accountHolderName): PaymentDetails
    {
        $this->accountHolderName = $accountHolderName;
        return $this;
    }

    /**
     * @return int
     */
    public function getExternalTransactionId(): int
    {
        return $this->externalTransactionId;
    }

    /**
     * @param int $externalTransactionId
     * @return PaymentDetails
     */
    public function setExternalTransactionId(int $externalTransactionId): PaymentDetails
    {
        $this->externalTransactionId = $externalTransactionId;
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
     * @return PaymentDetails
     */
    public function setAccountIban(string $accountIban): PaymentDetails
    {
        $this->accountIban = $accountIban;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountBic()
    {
        return $this->accountBic;
    }

    /**
     * @param mixed $accountBic
     * @return PaymentDetails
     */
    public function setAccountBic($accountBic)
    {
        $this->accountBic = $accountBic;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIssuerId(): ?int
    {
        return $this->issuerId;
    }

    /**
     * @param int|null $issuerId
     * @return PaymentDetails
     */
    public function setIssuerId(?int $issuerId): PaymentDetails
    {
        $this->issuerId = $issuerId;
        return $this;
    }
}