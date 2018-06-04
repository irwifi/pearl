<?php
$data = str_replace("data:image/png;base64,", "", $_POST["img_data"]);
$data = base64_decode($data);

$folder = str_replace("save_image.php", "", $_SERVER["SCRIPT_FILENAME"]) . "images/";
$permission = substr(sprintf('%o', fileperms($folder)), -4);
$im = imagecreatefromstring($data);

if ($im !== false) {
	chmod($folder, 0755);

	header('Content-Type: image/png');
	$image_name = "img" . rand() . ".png";
	imagepng($im, $folder . "/" . $image_name);
	imagedestroy($im);

	chmod($folder, $permission);

	echo "Image Saved";
}
else {echo 'An error occurred.';}
?>
