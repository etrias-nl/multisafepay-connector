<?php


namespace Etrias\MultiSafePayConnector\Type;


class RefundCreated
{
    /** @var string $transactionId */
    protected $transactionId;

    /** @var string $refundId */
    protected $refundId;

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return RefundCreated
     */
    public function setTransactionId(string $transactionId): RefundCreated
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefundId(): string
    {
        return $this->refundId;
    }

    /**
     * @param string $refundId
     * @return RefundCreated
     */
    public function setRefundId(string $refundId): RefundCreated
    {
        $this->refundId = $refundId;
        return $this;
    }


}