<?php 

namespace Source\Models\ValueObjects;

class Admeasurement
{
    private float $weight; //peso
    private float $width; //largura
    private float $height; //altura
    private float $depth; //profund.

    public function __construct(float $weight, float $width, float $height, float $depth)
    {
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    public function getWeight(){ return $this->weight; }
    public function getWidth(){ return $this->width; }
    public function getHeight(){ return $this->height; }
    public function getDepth(){ return $this->depth; }
}