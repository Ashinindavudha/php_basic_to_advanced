<?php
// fruit class
class Fruit
{
    // properties
    public $name;
    public $color;
    public $weight;
    public $price;
    // methods
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
// output
$data = new Fruit();
$data->setName('Apple');
echo $data->getName();
// set color
$data->setColor('Red');
echo $data->getColor();
// set weight
$data->setWeight(0.5);
echo $data->getWeight();
// set price
$data->setPrice(10);
echo $data->getPrice();
