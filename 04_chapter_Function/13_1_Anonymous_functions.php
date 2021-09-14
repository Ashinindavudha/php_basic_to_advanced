<?php
function myCaller($myCallback)
{
  echo $myCallback();
}

myCaller( function() { echo "Hello"; } ); // "Hello"