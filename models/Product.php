<?php
require_once __DIR__ . '/Category.php';
class Product
{
    public $name;
    public $brand;
    public $price;
    public $description;
    public $poster;
    public $category;

    public function __construct($_name, $_brand, $_price, $_description, $_poster, Category $_category)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->description = $_description;
        $this->poster = $_poster;
        $this->category = $_category;
    }
}
