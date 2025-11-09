<?php

namespace Source\Models\Product;

use source\Core\Model;
use Source\Models\ValueObjects\Price;
use Source\Models\ValueObjects\Stock;
use Source\Models\ValueObjects\Admeasurement;
use Source\Models\ValueObjects\TechnicalDetails;

class Product extends Model
{
    private ?int $id;
    private string $name;
    private string $description;
    private string $sku; // código identificador único
    private Price $price;
    private Stock $stock;
    private Admeasurement $admeasurement;
    private TechnicalDetails $technicalDetails;
    private string $status;
    private ?int $categoryId;
    private ?int $subcategoryId;
    private array $images; // ex: ['img1.jpg', 'img2.png']

    public function __construct(
        ?int $id,
        string $name,
        string $description,
        string $sku,
        Price $price,
        Stock $stock,
        Admeasurement $admeasurement,
        TechnicalDetails $technicalDetails,
        string $status = 'active',
        ?int $categoryId = null,
        ?int $subcategoryId = null,
        array $images = []
    ) {
        $this->table = 'product';
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->sku = $sku;
        $this->price = $price;
        $this->stock = $stock;
        $this->admeasurement = $admeasurement;
        $this->technicalDetails = $technicalDetails;
        $this->status = $status;
        $this->categoryId = $categoryId;
        $this->subcategoryId = $subcategoryId;
        $this->images = $images;
    }

    // ---------- GETTERS ----------
    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getDescription(): string { return $this->description; }
    public function getSku(): string { return $this->sku; }
    public function getPrice(): Price { return $this->price; }
    public function getStock(): Stock { return $this->stock; }
    public function getAdmeasurement(): Admeasurement { return $this->admeasurement; }
    public function getTechnicalDetails(): TechnicalDetails { return $this->technicalDetails; }
    public function getStatus(): string { return $this->status; }
    public function getCategoryId(): ?int { return $this->categoryId; }
    public function getSubcategoryId(): ?int { return $this->subcategoryId; }
    public function getImages(): array { return $this->images; }

    // ---------- SETTERS ----------
    public function setName(string $name): void { $this->name = $name; }
    public function setDescription(string $description): void { $this->description = $description; }
    public function setSku(string $sku): void { $this->sku = $sku; }
    public function setPrice(Price $price): void { $this->price = $price; }
    public function setStock(Stock $stock): void { $this->stock = $stock; }
    public function setAdmeasurement(Admeasurement $admeasurement): void { $this->admeasurement = $admeasurement; }
    public function setTechnicalDetails(TechnicalDetails $technicalDetails): void { $this->technicalDetails = $technicalDetails; }
    public function setStatus(string $status): void { $this->status = $status; }
        public function setCategoryId(?int $categoryId): void { $this->categoryId = $categoryId; }
        public function setSubcategoryId(?int $subcategoryId): void { $this->subcategoryId = $subcategoryId; }
    }