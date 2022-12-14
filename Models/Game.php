<?php
require_once 'Product.php';
class Game extends Product
{
    public $color;

    public function __construct($_name, $_price, $_discount, $_category, $_brand, $_image, $_color)
    {
        parent::__construct($_name, $_price, $_discount, $_category, $_brand, $_image);
        $this->color = $_color;
    }
};

?>