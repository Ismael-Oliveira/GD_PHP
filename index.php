<?php
    
    $img_original = './assets/imagens/savana.png';
    $logomarca = './assets/imagens/mini_savana.png';

    list($largura_original, $altura_original) = getimagesize($img_original);
    list($largura_mini, $altura_mini)= getimagesize($logomarca);

    $new_image = imagecreatetruecolor($largura_original, $altura_original);
    $marca_img = imagecreatetruecolor($largura_mini, $altura_mini);

    $original = imagecreatefrompng($img_original);
    $img_mini = imagecreatefrompng($logomarca);

    imagecopy($new_image, $original, 0, 0, 0, 0, $largura_original, $altura_original);
    imagecopy($new_image, $img_mini, $largura_original-$largura_mini, $altura_original-$altura_mini
                                                                    , 0, 0, $largura_mini, $altura_mini);

    header("Content-type: image/png");
    imagepng($new_image, null);

 ?>

