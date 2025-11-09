<?php 

namespace Source\Models\ValueObjects;

class TechnicalDetails
{
    private string $color; //cor
    private string $material; //material

    public function __construct(string $color, string $material)
    {
        $this->color = $color;
        $this->material = $material;
    }

    public function getColor(){ return $this->color; }
    public function getMaterial(){ return $this->material; }
}