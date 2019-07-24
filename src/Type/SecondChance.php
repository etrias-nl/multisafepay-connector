<?php


namespace Etrias\MultiSafePayConnector\Type;


class SecondChance
{
    /**
     * @var bool|null
     */
    protected $sendEmail;

    public function __construct(bool $sendEmail = null)
    {
        $this->sendEmail = $sendEmail;
    }

    /**
     * @return bool|null
     */
    public function getSendEmail(): ?bool
    {
        return $this->sendEmail;
    }

    /**
     * @param bool|null $sendEmail
     * @return SecondChance
     */
    public function setSendEmail(?bool $sendEmail): SecondChance
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }


}