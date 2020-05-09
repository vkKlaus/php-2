<?php

class WriteArray implements Writer
{
    public $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function write($convert)
    {
        $str = '<?php' . PHP_EOL . '$arrayData = [' . PHP_EOL;

        foreach ($convert->data as $key => $item) {
            $str .= "'$key' => $item," . PHP_EOL;
        }

        $str .= "];";

        file_put_contents($this->path, $str);

        return $this;
    }
}
