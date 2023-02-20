<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product
{
    private $food_type;
    private $date;

    public function __construct($_name, $_brand, $_price, $_description, $_poster, $_food_type, $_date, Category $_category, $_type)
    {
        parent::__construct($_name, $_brand, $_price, $_description, $_poster, $_category, $_type);

        $this->food_type = $_food_type;
        $this->date = $_date;
    }

    public function getFoodType()
    {
        return $this->food_type;
    }

    public function getDate()
    {
        return $this->date;
    }
}
