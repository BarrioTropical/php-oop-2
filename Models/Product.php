<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Traits/Weightable.php';
    class Product {
    use Weightable;
        public $name;
        public $price;
        public $discount;
        public $category;
        public $brand;
        public $image;

        function __construct(string $_name,int $_price, string $_discount, string $_category, string $_brand, string $_image)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->discount = $_discount;
            $this->category = $_category;
            $this->brand = $_brand;
            $this->image = $_image;
        }
    }
?>