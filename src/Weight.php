<?php


namespace Tallandsassy\UnitConversions;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }
    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }
    public function toLbs(): float
    {
        if ($this->kilograms == 0) {
            return -1;
        }
        return $this->kilograms * 2.204623;
    }

    public function toStones(): float
    {
        return $this->kilograms * 2.204623;
    }

}
