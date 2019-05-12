<?php 
$width = 48;
$height = 64;
$player = "player";


$dest_image = imagecreatetruecolor($width, $height);

imagesavealpha($dest_image, true);

$trans_background = imagecolorallocatealpha($dest_image, 0, 0, 0, 127);

imagefill($dest_image, 0, 0, $trans_background);

$src_image = imagecreatefrompng($player . ".png");

for ($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {
        imagecopy($dest_image, $src_image, 0, 0, $i*48, $j*64, $width, $height);
        imagepng($dest_image, $player . "_" . $i . "_" . $j . ".png");
    }
}

imagedestroy($src_image);
imagedestroy($dest_image);

?>
