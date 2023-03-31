<?php

namespace Vendor\Myproject\Classes;

abstract class AbstractBerry
{
    protected $color;
    protected $size;
    protected $taste;

    abstract public function getColor(): string;
    abstract public function getSize(): string;
    abstract public function getTaste(): string;
}