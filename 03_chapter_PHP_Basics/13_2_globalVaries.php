<?php
$somevar = 13;
function addit() {
    GLOBAL $somevar;
    $GLOBALS["somevar"]++;
}
addit();

    print "Somevar is $somevar";