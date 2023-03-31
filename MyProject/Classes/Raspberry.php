<?php

namespace Vendor\Myproject\Classes;

class Raspberry extends Berry implements BerryInterface
{
    use BerryTrait;

    public function __construct()
    {
        parent::__construct('red', 'medium');
        $this->taste = 'sweet';
    }

    public function getTaste(): string
    {
        return $this->taste;
    }

    public function grow(): void
    {
        echo "The raspberry is growing.\n";
    }
}