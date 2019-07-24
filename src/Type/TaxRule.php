<?php


namespace Etrias\MultiSafePayConnector\Type;


class TaxRule
{
    /** @var float */
    protected $rate;

    /**
     * @var string|null
     */
    protected $country;

    public function __construct(float $rate, string $country = null)
    {
        $this->rate = $rate;
        $this->country = $country;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return TaxRule
     */
    public function setRate(float $rate): TaxRule
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     * @return TaxRule
     */
    public function setCountry(?string $country): TaxRule
    {
        $this->country = $country;
        return $this;
    }


}