<?php
function resizeImage($file, $width, $height) {
    list($originalWidth, $originalHeight) = getimagesize($file);
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($width, $height);

    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);

    imagejpeg($dst, 'resized_' . basename($file));

    imagedestroy($src);
    imagedestroy($dst);
}

// Usage
resizeImage('butterfly.jpg', 200, 150);
?>
