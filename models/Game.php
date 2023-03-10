<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Game extends Product
{
    private $game_color;
    private $material;

    public function __construct($_name, $_brand, $_price, $_description, $_poster, $_game_color, $_material, Category $_category, $_type)
    {
        parent::__construct($_name, $_brand, $_price, $_description, $_poster, $_category, $_type);

        $this->game_color = $_game_color;
        $this->material = $_material;
    }

    public function getGameColor()
    {
        return $this->game_color;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
