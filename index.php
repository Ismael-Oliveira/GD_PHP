<?php
    $arquivo = "savana.png";
    // $arquivo = "./assets/imagens/savana.jpg";
    // $arquivo = "./assets/imagens/savana.png";
    
    $width =  200;
    $height = 200;

    list($width_original, $height_original) = getimagesize($arquivo);

    $ratio = $width_original / $height_original;

    if($width/$height > $ratio){
        $width = $height * $ratio;
    }else{
        $height = $width / $ratio;
    }
    
    // echo "Altura ".$height." Largura ".$width;
    $new_img = imagecreatetruecolor($width, $height);

    // $img_original = imagecreatefromjpeg($arquivo);
    $img_original = imagecreatefrompng($arquivo);

    // var_dump($img_original);
    imagecopyresampled($new_img, $img_original, 0, 0, 0, 0, $width, $height, $width_original, $height_original);
    
    // header("Content-Type: image/jpeg");
    // $test = imagejpeg($new_img, null, 90);
    // header("Content-Type: image/png");
    imagepng($new_img, "./assets/imagens/mini_savana.png");

    echo "Imagem redimensionada com sucesso";

 ?>

