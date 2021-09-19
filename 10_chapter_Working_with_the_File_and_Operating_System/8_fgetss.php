<?php
// build list of acceptable tags

$tags = "<h2><h3><p><b><a><img>";

// open the article, and read its contents.
$fh = fopen("article.html", "rt");

while (!feof($fh)) {
    $article .= fgets($fh, 1024, $tags);
}
fclose($fh);

// open the file up in write mode and write $article contents.
$fh = fopen("article.html", "wt");
fwrite($fh, $article);
fclose($fh);