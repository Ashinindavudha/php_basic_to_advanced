<?php 
function keep_track()
{
    static $count = 0;
    $count++;
    echo $count;

}
keep_track();
keep_track();
keep_track();