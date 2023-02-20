<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Bed extends Product
{
    private $color;
    private $dimensions;
    private $materials;

    public function __construct($_name, $_brand, $_price, $_description, $_poster, $_color, $_dimensions, $_materials, Category $_category, $_type)
    {
        parent::__construct($_name, $_brand, $_price, $_description, $_poster, $_category, $_type);

        $this->color = $_color;
        $this->dimensions = $_dimensions;
        $this->materials = $_materials;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function getMaterials()
    {
        return $this->materials;
    }
}
