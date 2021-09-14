<?php
function myFunc() 
{ 
  // Exit function and return value
  return 'Hello';
  echo 'Hi'; // never executes
} 

echo myFunc(); // "Hello"
 