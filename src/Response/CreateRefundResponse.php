<?php


namespace Etrias\MultiSafePayConnector\Response;


use Etrias\MultiSafePayConnector\Type\RefundCreated;

class CreateRefundResponse extends AbstractResponse
{
    /** @var RefundCreated */
    protected $data;

    /**
     * @return RefundCreated
     */
    public function getData()
    {
        return $this->data;
    }
}