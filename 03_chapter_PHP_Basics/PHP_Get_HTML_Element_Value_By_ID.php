<?php
  
$htmlEle = "<html><body><p>This is ItSolutionStuff.com Example 1</p><p>This is ItSolutionStuff.com Example 2</p></body></html>";
$domdoc = new DOMDocument();
$domdoc->loadHTML($htmlEle);
   
$pTags = $domdoc->getElementsByTagName('p');
  
foreach ($pTags as $p) {
    echo $p->nodeValue, PHP_EOL;
}