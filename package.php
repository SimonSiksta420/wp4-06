<?php

namespace App;

class Package extends BaseProduct
{
    public string $name;

    public array $products = [];

    public function getPrice(): int
    {
        $total = 0;

        foreach ($this->products as $product) {
            # code...
        }
    
    return $total;

    }
}

?>