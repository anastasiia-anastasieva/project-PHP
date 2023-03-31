<?php

namespace Vendor\Myproject\Classes;

interface BerryInterface
{
    public function getColor(): string;
    public function getSize(): string;
    public function getTaste(): string;
    public function grow(): void;
}