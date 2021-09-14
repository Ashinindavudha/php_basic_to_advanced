<?php
$sentence = "The rain in Myanmar falls mainly on the plain";
//retrieve located characters and thire corresponding frequency.
$char = count_chars($sentence, 1);
foreach($char as $letter=>$frequency)
{
    echo "Character " . chr($letter). " appears $frequency times<br>";
}