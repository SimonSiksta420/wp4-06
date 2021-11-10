<?php

namespace App;

abstract class BaseProduct
{
    public string $name;

    abstract public function getPrice(): int;
}

?>