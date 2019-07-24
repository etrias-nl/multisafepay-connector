<?php


namespace Etrias\MultiSafePayConnector\Type;


class ShoppingCartItem
{

    /** @var string */
    protected $name;

    /** @var string */
    protected $description;

    /** @var float */
    protected $unitPrice;

    /** @var float */
    protected $quantify;

    /** @var string */
    protected $merchantItemId;

    /** @var string */
    protected $taxTableSelector;

    /** @var Weight|null */
    protected $weight;

    public function __construct(string $merchantItemId, string $name, float $unitPrice, float $quantify)
    {

        $this->merchantItemId = $merchantItemId;
        $this->name = $name;
        $this->unitPrice = $unitPrice;
        $this->quantify = $quantify;
        $this->taxTableSelector = 'default';
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
     * @return ShoppingCartItem
     */
    public function setName(string $name): ShoppingCartItem
    {
        $this->name = $name;
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
     * @return ShoppingCartItem
     */
    public function setDescription(string $description): ShoppingCartItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     * @return ShoppingCartItem
     */
    public function setUnitPrice(float $unitPrice): ShoppingCartItem
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantify(): float
    {
        return $this->quantify;
    }

    /**
     * @param float $quantify
     * @return ShoppingCartItem
     */
    public function setQuantify(float $quantify): ShoppingCartItem
    {
        $this->quantify = $quantify;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantItemId(): string
    {
        return $this->merchantItemId;
    }

    /**
     * @param string $merchantItemId
     * @return ShoppingCartItem
     */
    public function setMerchantItemId(string $merchantItemId): ShoppingCartItem
    {
        $this->merchantItemId = $merchantItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxTableSelector(): string
    {
        return $this->taxTableSelected;
    }

    /**
     * @param string $taxTableSelected
     * @return ShoppingCartItem
     */
    public function setTaxTableSelector(string $taxTableSelector): ShoppingCartItem
    {
        $this->taxTableSelector = $taxTableSelector;
        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getWeight(): ?Weight
    {
        return $this->weight;
    }

    /**
     * @param Weight|null $weight
     * @return ShoppingCartItem
     */
    public function setWeight(?Weight $weight): ShoppingCartItem
    {
        $this->weight = $weight;
        return $this;
    }


}