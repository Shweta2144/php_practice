<?php
function cropImage($file, $cropWidth, $cropHeight, $x, $y) {
    list($originalWidth, $originalHeight) = getimagesize($file);
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($cropWidth, $cropHeight);

    imagecopy($dst, $src, 0, 0, $x, $y, $cropWidth, $cropHeight);

    imagejpeg($dst, 'cropped_' . basename($file));

    imagedestroy($src);
    imagedestroy($dst);
}

// Usage
cropImage('butterfly.jpg', 100, 100, 50, 50);
?>
