<?php
    session_start();
    // Генерируем случайное число.
    $rand = mt_rand(1000, 9999);

    // Сохраняем значение переменной  $rand ( капчи ) в сессию
    $_SESSION["rand"] = $rand;
 
    //создаём новое черно-белое изображение
    $im = imageCreateTrueColor(90,50);
 
    // Указываем белый цвет для текста
    $c = imageColorAllocate($im, 255, 255, 255);
    $font = "../../fonts/verdana.ttf"
    // Записываем полученное случайное число на изображение
    imageTtfText($im, 20, -10, 10, 30, $c, $font, $rand);
 
    header("Content-type: image/png");
 
    // Выводим изображение
    imagePng($im);
 
    //Освобождаем ресурсы
    imageDestroy($im);
?>