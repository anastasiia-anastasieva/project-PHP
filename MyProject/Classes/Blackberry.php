<?php

namespace Vendor\Myproject\Classes;

class Blackberry extends Berry implements BerryInterface
{
    use BerryTrait, GrowableTrait;

    public function __construct()
    {
        parent::__construct('black', 'medium');
        $this->taste = 'sweet';
    }

    public function getTaste(): string
    {
        return $this->taste;
    }

    public function grow(): void
    {
        echo "The blackberry is growing.\n";
    }
}