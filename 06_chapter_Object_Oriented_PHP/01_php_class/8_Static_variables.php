<?php
// Static variables
function add()
{
  static $val = 0;
  echo $val++;
}

add(); // "0"
add(); // "1"
add(); // "2"