<?php
header("Content-type:application/json");
$dir = "img/gallery";
$images = preg_grep('~\.(jpeg|jpg|png|bmp|gif)$~', scandir($dir)); 
echo json_encode (array_values ($images));
?>