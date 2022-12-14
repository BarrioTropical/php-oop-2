<?php
require_once 'Product.php';
class Food extends Product
{
    public $food_type;
    public $food_taste;

    public $size;

    public function __construct($_name, $_price, $_discount, $_category, $_brand, $_image, $_food_type, $_food_taste, $_size)
    {
        parent::__construct($_name, $_price, $_discount, $_category, $_brand, $_image);
        $this->food_type = $_food_type;
        $this->food_taste = $_food_taste;
        $this->size = $_size;
    }
};

?>