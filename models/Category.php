<?php

class Category
{
    private $label;

    public function __construct($_label)
    {
        $this->label = $_label;
    }

    public function getLabel()
    {
        return $this->label;
    }
}
