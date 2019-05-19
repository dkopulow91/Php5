<?php

$source = 'photo';

function getImage($source) {
    if (!file_exists($source)) {
        return false;
    }

    $files = scandir($source);

    $images = [];

    foreach ($files as $file) {
        $mimeType = mime_content_type($source.'/'.$file);
        if (strpos($mimeType, 'image') === 0) {
            $images[] = $file;
        }
    }
    return $images;

}



$images = getImage($source);
