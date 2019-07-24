<?php


namespace Etrias\MultiSafePayConnector\Type;


class Cost
{
    /** @var string */
    protected $transactionId;

    /** @var string */
    protected $description;

    /** @var string */
    protected $type;

    /** @var float */
    protected $amount;

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return Cost
     */
    public function setTransactionId(string $transactionId): Cost
    {
        $this->transactionId = $transactionId;
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
     * @return Cost
     */
    public function setDescription(string $description): Cost
    {
        $this->description = $description;
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
     * @return Cost
     */
    public function setType(string $type): Cost
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Cost
     */
    public function setAmount(float $amount): Cost
    {
        $this->amount = $amount;
        return $this;
    }
}