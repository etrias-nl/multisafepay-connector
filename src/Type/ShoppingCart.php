<?php


namespace Etrias\MultiSafePayConnector\Type;


class ShoppingCart
{
    /** @var ShoppingCartItem[] */
    protected $items;

    /**
     * ShoppingCart constructor.
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
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
     * @return ShoppingCart
     */
    public function setItems(array $items): ShoppingCart
    {
        $this->items = $items;
        return $this;
    }

    public function addItem(ShoppingCartItem $item)
    {
        $this->items[] = $item;
    }


}