<?php
interface iMyinterface
{
    public function myMethod();
    const PI = 3.14;
}
interface iComparable
{
    public function compare(iComparable $o);
}
class Circle implements iComparable
{
    public $r;
    public function compare(iComparable $o)
    {
        return $this->$o->r;
    }
}
function largest(iComparable $a, iComparable $b)
{
    return ($a->compare($b) > 0) ? $a : $b;
}
echo "interface example";