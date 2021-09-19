<?php
class MyClass
{
    private $data = array();
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
           return $this->data[$name];
        }
    }
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}
$obj = new MyClass();
$obj->name = "ashin";
isset($obj->name); // true
isset($obj->age); // false
empty($obj->name); // false
empty($obj->age); // true


