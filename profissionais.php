<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="img" />
    <input type="submit" name="ok" value="Enviar" />
</form>

<?php

$tempname = $_FILES["img"]["tmp_name"]; // Caminho completo da imagem original.
$extension = strtolower(pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION)); // Extraindo extensão com 'pathinfo' da imagem original.
$name = "new_img"; // Nome do novo arquivo de imagem
$url = "images/" . $name . "." . $extension; // Caminho onde será salvo a nova imagem
$max_width = 300; // Largura final da imagem
$max_height = 300; // Altura final da imagem

$allowed_extensions = array('gif', 'jpg', 'png'); // Extensões permitidas

if (in_array($extension, $allowed_extensions)) { // Se extensão é permitida...
    move_uploaded_file($tempname, $url); // Move para o caminho definido em '$url'
} else return "Arquivo não permitido.";

// Pega a largura, altura, tipo e atributo da imagem
list($image_width, $image_height, $type, $attribute) = getimagesize($url);
