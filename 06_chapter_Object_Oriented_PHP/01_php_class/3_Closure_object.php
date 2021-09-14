<?php
class C {
    private $x = 'Hi';
}
$getC = function() {
    return $this->x;
};
$getX = $getC->bindTo(new C, 'C');
echo $getX() . "<br>"; // "Hi"
// PHP 7+ code
$getX = function() {
    return $this->x;
};
echo $getX->call(new C); // 'hi'