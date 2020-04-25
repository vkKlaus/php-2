<?php

class Basket
{
    public $goods = [];

    public function addProduct($product, $count)
    {
        $this->goods[] = [
            'product' => $product,
            'count' => $count,
            'sum' => $product->price * $count,
        ];
    }

    public function delProduct($product)
    {
        $this->goods = array_filter(
                    $this->goods,
                    function ($item) use ($product) {
                        return $item != $product;
                    }
                );
    }

    public function describe()
    {
        if (count($this->goods) == 0){
            $basket = "корзина пуста";
        } 
        else {
            $basket="товар / цена / количество / сумма<br>";

            foreach($this->goods as $item){
                $product = $item['product']->name;
                $price= $item['product']->price;
                $count = $item['count'];
                $sum = $item['sum'];

                $basket .= "$product / $price / $count / $sum<br>";
            };
        }

        return  $basket;

    }

    public function getTotal()
    {
        if (count($this->goods) == 0){
            return 0;
        } 

        return array_sum(array_column($this->goods, 'sum'));
    }
}