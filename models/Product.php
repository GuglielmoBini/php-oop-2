<?php
require_once __DIR__ . '/Category.php';
class Product
{
    private $name;
    private $brand;
    private $price;
    private $description;
    private $poster;
    private $category;
    private $type;

    public function __construct($_name, $_brand, $_price, $_description, $_poster, Category $_category, $_type)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->description = $_description;
        $this->poster = $_poster;
        $this->category = $_category;
        $this->type = $_type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPoster()
    {
        return $this->poster;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getType()
    {
        return $this->type;
    }
}
