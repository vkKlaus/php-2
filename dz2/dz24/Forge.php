<?php
class Forge
{
    public function burn($object)
    {
        $flame = $object->burn();
        echo $flame->render((string) $object) . PHP_EOL;
    }
}
