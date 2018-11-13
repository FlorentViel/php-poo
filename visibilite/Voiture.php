<?php

class Voiture 
{
    private $brand;
    private $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
        echo $this->brand;
    }
}