<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\MultiSafePayConnector\Type;

class ShoppingCart
{
    /** @var ShoppingCartItem[] */
    protected $items;

    /**
     * ShoppingCart constructor.
     *
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
     *
     * @return ShoppingCart
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function addItem(ShoppingCartItem $item)
    {
        $this->items[] = $item;
    }
}
