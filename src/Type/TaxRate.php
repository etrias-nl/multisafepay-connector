<?php


namespace Etrias\MultiSafePayConnector\Type;


class TaxRate
{
    /** @var string */
    protected $name;

    /** @var bool */
    protected $standalone;

    /** TaxRule[] */
    protected $rules;

    public function __construct(string $name, bool $standalone = false)
    {
        $this->name = $name;
        $this->standalone = $standalone;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TaxRate
     */
    public function setName(string $name): TaxRate
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStandalone(): bool
    {
        return $this->standalone;
    }

    /**
     * @param bool $standalone
     * @return TaxRate
     */
    public function setStandalone(bool $standalone): TaxRate
    {
        $this->standalone = $standalone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param mixed $rules
     * @return TaxRate
     */
    public function setRules($rules)
    {
        $this->rules = $rules;
        return $this;
    }
}