<?php

namespace Vendor\Myproject\Classes;

class Blueberry extends Berry implements BerryInterface
{
    use BerryTrait;

    public function __construct()
    {
        parent::__construct('blue', 'small');
        $this->taste = 'sweet';
    }

    public function getTaste(): string
    {
        return $this->taste;
    }

    public function grow(): void
    {
        echo "The blueberry is growing.\n";
    }
}