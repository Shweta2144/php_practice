<?php
function addTextToImage($file, $text, $fontSize, $x, $y, $color = [0, 0, 0]) {
    $image = imagecreatefromjpeg($file);
    $textColor = imagecolorallocate($image, $color[0], $color[1], $color[2]);
    $fontPath = './path/to/your/font.ttf'; // Ensure you have a TTF font file

    imagettftext($image, $fontSize, 0, $x, $y, $textColor, $fontPath, $text);

    imagejpeg($image, 'text_' . basename($file));

    imagedestroy($image);
}

// Usage
addTextToImage('butterfly.jpg', 'Hello World!', 20, 50, 50);
?>
