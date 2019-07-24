<?php


namespace Etrias\MultiSafePayConnector\Type;


class TaxTables
{
    /** @var TaxDefaultRule */
    protected $default;

    /** @var TaxRate[] */
    protected $alternate = [];

    public function __construct(TaxDefaultRule $default)
    {
        $this->default = $default;
    }

    public function addAlternateRate(TaxRate $rate)
    {
        $this->alternate[] = $rate;
    }
}