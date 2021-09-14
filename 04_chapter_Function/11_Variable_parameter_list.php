<?php
// Variable parameter list
function myArgs() 
{ 
  $x = func_get_arg(0); // get specified argument
  $y = func_get_arg(1);	
  $z = func_get_arg(2);	 
  echo $x . $y . $z;
}  
 
myArgs('Fee', 'Fi', 'Fo'); // "FeeFiFo"
 
function myArgs2() 
{ 
  $num  = func_num_args();
  $args = func_get_args();
  for ($i = 0; $i < $num; $i++)
    echo $args[$i];
}
 
myArgs2('Fee', 'Fi', 'Fo'); // "FeeFiFo"

function myArgs3(...$args)
{ 
  foreach($args as $v) {
    echo $v;
  }
}
 
myArgs3(1, 2, 3); // "123"

$a = [1, 2, 3];
myArgs3(...$a); // "123"