<?php

trait Weightable {
    
    protected $weight;
    protected $measureUnit;

    public function setWeight(float $weight, string $measureUnit) {
        $this->weight = $weight;
        $this->measureUnit = $measureUnit;
    }

    public function getWeight() {
        return $this->weight . ' ' . $this->measureUnit;
    }
}