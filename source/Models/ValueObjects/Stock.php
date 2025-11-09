<?php 

namespace Source\Models\ValueObjects;

class Stock
{
    private int $quantity;

    public function __construct(int $quantity)
    {
        $this->quantity = max(0, $quantity);
    }

    public function getQuantity () : int
    {
        return $this->quantity;
    }

    public function decrease (int $qtd) : void
    {
        $this->quantity = max(0, $this->quantity - $qtd);
    }

    public function increase (int $qtd) : void
    {
        $this->quantity += $qtd;
    }
}