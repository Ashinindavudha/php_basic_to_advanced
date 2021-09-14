<?php

use Staff as GlobalStaff;

class Staff
{
    private $name;
    private $title;
    protected $wage;
    public function clockIn() {
        echo "Member $this->name clocked in at ".date("h:i:s"). "<br>";
    }
    public function clockOut() {
        echo "Member $this->name clocked out at ".date("h:i:s") ."<br>";
    }
    public function __construct()
    {
        $this->getName();
        $this->clockIn();
        $this->clockOut();
    }
    public function getName()
    {
        $this->name = "Ashin";
        print "Name:" .$this->name ."<br>";
    }
}
$clockInOut = new Staff();

//var_dump($clockInOut);
?>