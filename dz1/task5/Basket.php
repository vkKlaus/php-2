<?php

class Basket
{
    public $goods = [];

    public function addProduct($product, $quantity)
    {
        $this->goods[] = [
            'product' => $product,
            'quantity' => $quantity,
        ];
    }

    public function getPrice()
    {
        if (count($this->goods) == 0) {
            return 0;
        }

        $total=0;

        foreach($this->goods as $item){
            $total +=$item['product']->price* $item['quantity'];
        }
        return $total;
    }

    public function describe()
    {
        $strBasket = '';

        foreach ($this->goods as $element) {
            $strBasket .= $element['product']->getName() . '-' . $element['product']->getPrice() . '-' . $element['quantity'] . '<br>';
        }

        return $strBasket;
    }
}
