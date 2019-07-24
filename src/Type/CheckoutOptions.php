<?php


namespace Etrias\MultiSafePayConnector\Type;


class CheckoutOptions
{
    /** @var TaxTables */
    protected $taxTables;

    /**
     * @return TaxTables
     */
    public function getTaxTables(): TaxTables
    {
        return $this->taxTables;
    }

    /**
     * @param TaxTables $taxTables
     * @return CheckoutOptions
     */
    public function setTaxTables(TaxTables $taxTables): CheckoutOptions
    {
        $this->taxTables = $taxTables;
        return $this;
    }



}