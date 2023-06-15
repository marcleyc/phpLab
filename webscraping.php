<?php

// https://www.youtube.com/watch?v=nzT4FgUcjl8&t=384s

$html = file_get_contents('justicagov.html');

libxml_use_internal_errors(true);

$domDocument = new DOMDocument();
$domDocument->loadHTML($html);

$linkTags = $domDocument->getElementById("block_container");

$href = $linkTags->getAttribute("step-icon");

echo $href;

$linkList = "";

foreach ($linkTags as $link) {
    $href = $link->getAttribute('step-icon');
    //if(strpos($link->getAttribute('class'),'step-icon') === 0) { $linkList .= $link->textContent . "\n"; };
}

file_put_contents("lista.txt", $linkList);

