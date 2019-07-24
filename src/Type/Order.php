<?php


namespace Etrias\MultiSafePayConnector\Type;


class Order
{
    /** @var string */
    protected $transactionId;

    /** @var string */
    protected $orderId;

    /** @var \DateTime */
    protected $created;

    /** @var string */
    protected $currency;

    /** @var int */
    protected $amount;

    /** @var string */
    protected $description;

    /** @var string|null */
    protected $var1;

    /** @var string|null */
    protected $var2;

    /** @var string|null */
    protected $var3;

    /** @var ShoppingCartItem[] */
    protected $items;

    /** @var int */
    protected $amountRefunded;

    /** @var string */
    protected $status;

    /** @var string */
    protected $financialStatus;

    /** @var string */
    protected $reason;

    /** @var string */
    protected $reasonCode;

    /** @var string */
    protected $fastCheckout;

    /** @var \DateTime|null */
    protected $modified;

    /** @var Customer */
    protected $customer;

    /** @var array */
    protected $customInfo;

    /** @var PaymentDetails */
    protected $paymentDetails;

    /** @var Cost[] */
    protected $costs;

    /** @var array */
    protected $relatedTransactions;

    /** @var PaymentMethod */
    protected $paymentMethods;

    public function __construct()
    {
        $this->items = [];
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return Order
     */
    public function setTransactionId(string $transactionId): Order
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return Order
     */
    public function setOrderId(string $orderId): Order
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     * @return Order
     */
    public function setCreated(\DateTime $created): Order
    {
        $this->created = $created;
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
     * @return Order
     */
    public function setCurrency(string $currency): Order
    {
        $this->currency = $currency;
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
     * @return Order
     */
    public function setAmount(int $amount): Order
    {
        $this->amount = $amount;
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
     * @return Order
     */
    public function setDescription(string $description): Order
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVar1(): ?string
    {
        return $this->var1;
    }

    /**
     * @param string|null $var1
     * @return Order
     */
    public function setVar1(?string $var1): Order
    {
        $this->var1 = $var1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVar2(): ?string
    {
        return $this->var2;
    }

    /**
     * @param string|null $var2
     * @return Order
     */
    public function setVar2(?string $var2): Order
    {
        $this->var2 = $var2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVar3(): ?string
    {
        return $this->var3;
    }

    /**
     * @param string|null $var3
     * @return Order
     */
    public function setVar3(?string $var3): Order
    {
        $this->var3 = $var3;
        return $this;
    }

    /**
     * @return ShoppingCartItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param ShoppingCartItem[] $items
     * @return Order
     */
    public function setItems(array $items): Order
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmountRefunded(): int
    {
        return $this->amountRefunded;
    }

    /**
     * @param int $amountRefunded
     * @return Order
     */
    public function setAmountRefunded(int $amountRefunded): Order
    {
        $this->amountRefunded = $amountRefunded;
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
     * @return Order
     */
    public function setStatus(string $status): Order
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinancialStatus(): string
    {
        return $this->financialStatus;
    }

    /**
     * @param string $financialStatus
     * @return Order
     */
    public function setFinancialStatus(string $financialStatus): Order
    {
        $this->financialStatus = $financialStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return Order
     */
    public function setReason(string $reason): Order
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getReasonCode(): string
    {
        return $this->reasonCode;
    }

    /**
     * @param string $reasonCode
     * @return Order
     */
    public function setReasonCode(string $reasonCode): Order
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFastCheckout(): string
    {
        return $this->fastCheckout;
    }

    /**
     * @param string $fastCheckout
     * @return Order
     */
    public function setFastCheckout(string $fastCheckout): Order
    {
        $this->fastCheckout = $fastCheckout;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getModified(): ?\DateTime
    {
        return $this->modified;
    }

    /**
     * @param \DateTime|null $modified
     * @return Order
     */
    public function setModified(?\DateTime $modified): Order
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return Order
     */
    public function setCustomer(Customer $customer): Order
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomInfo(): array
    {
        return $this->customInfo;
    }

    /**
     * @param array $customInfo
     * @return Order
     */
    public function setCustomInfo(array $customInfo): Order
    {
        $this->customInfo = $customInfo;
        return $this;
    }

    /**
     * @return PaymentDetails
     */
    public function getPaymentDetails(): PaymentDetails
    {
        return $this->paymentDetails;
    }

    /**
     * @param PaymentDetails $paymentDetails
     * @return Order
     */
    public function setPaymentDetails(PaymentDetails $paymentDetails): Order
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

    /**
     * @return Cost[]
     */
    public function getCosts(): array
    {
        return $this->costs;
    }

    /**
     * @param Cost[] $costs
     * @return Order
     */
    public function setCosts(array $costs): Order
    {
        $this->costs = $costs;
        return $this;
    }

    /**
     * @return array
     */
    public function getRelatedTransactions(): array
    {
        return $this->relatedTransactions;
    }

    /**
     * @param array $relatedTransactions
     * @return Order
     */
    public function setRelatedTransactions(array $relatedTransactions): Order
    {
        $this->relatedTransactions = $relatedTransactions;
        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethods(): PaymentMethod
    {
        return $this->paymentMethods;
    }

    /**
     * @param PaymentMethod $paymentMethods
     * @return Order
     */
    public function setPaymentMethods(PaymentMethod $paymentMethods): Order
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
}