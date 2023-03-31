<?php

namespace Vendor\Myproject\Classes;

class Berry
{
    protected $color;
    protected $size;

    public function __construct(string $color, string $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getColor(): string
    {
        return $this->color;
    }

public function getSize(): string
{
return $this->size;
}
}