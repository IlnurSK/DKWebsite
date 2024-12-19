<?php

class Car
{
    // Properties (свойства) / Fields (поля)
    private $brand;
    private $color;
//    private $vehicleType = "car";

// Constructor (Конструктор)
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter & setter methods (Методы получения и установки)
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $allowedColors = [
            "red",
            "blue",
            "green",
            "yellow"
        ];

        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }

// Method (Метод)
    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    }

}

//$car01 = new Car("Volvo", "green");
////$car02 = new Car("BMW");
////$car03 = new Car("Toyota", "yellow");
//
////echo $car01->vehicleType;
//
//echo $car01->getCarInfo();


