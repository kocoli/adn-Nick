<?php 

namespace Source\Models\ValueObjects;

class Price
{
    private float $sale;
    private ?float $promotional;
    private ?float $freight;

    public function __construct(float $sale, ?float $promotional, ?float $freight)
    {
        $this->sale = $sale;
        $this->promotional = $promotional;
        $this->freight = $freight;
    }

    public function getSale() : float {
        return $this->sale;
    }

    public function getPromotional() : ?float {
        return $this->promotional;
    }

    public function getFreight() : ?float {
        return $this->freight;
    }
}