<?php

class Manager
{
    public function  place($item)
    {

        $parent = get_parent_class($item);

        $itemName = get_class($item);

        echo "Это $itemName ($parent)" . PHP_EOL;

        echo $item->location($itemName) . PHP_EOL;

        echo PHP_EOL;
    }
}
